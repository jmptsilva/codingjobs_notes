<?php

require_once 'database.php';

//retrieve all ships info to be displayed in homepage
$res = $pdo->query('SELECT * FROM ships');
$ships = $res->fetchAll(PDO::FETCH_ASSOC);

//check if there is a submit to validate/insert without errors
if (isset($_POST['submitBtn'])) {

    $errors = array();

    // validation of inputs and definition of error messages
    if (empty($_POST['name'])) {
        $errors['name'] = 'The name is mandatory.';
    } else {
        $name = $_POST['name'];
    }

    if (empty($_POST['price'])) {
        $errors['price'] = 'The price is mandatory.';
    } else if (!is_numeric($_POST['price'])) {
        $errors['price'] = 'Price must be numeric only';
    } else {
        $price = $_POST['price'];
    }

    if (empty($_POST['picture'])) {
        $errors['picture'] = 'A picture is mandatory.';
    } else {
        $picture = $_POST['picture'];
    }

    if (empty($_POST['description'])) {
        $errors['description'] = 'A description is mandatory.';
    } else {
        $description = $_POST['description'];
    }

    $fast_drive = 0;

    if (isset($_POST['fastdrive'])) {
        $fast_drive = 1;
    }

    //if no errors occurred, prepare and insert the new db entry
    if (empty($errors)) {

        $prep = $pdo->prepare('INSERT INTO ships(name, price, fast_drive, picture, description) 
        VALUES(:name, :price, :fast_drive, :picture, :description)');

        $prep->bindValue(':name', $name);
        $prep->bindValue(':price', $price);
        $prep->bindValue(':fast_drive', $fast_drive);
        $prep->bindValue(':picture', $picture);
        $prep->bindValue(':description', $description);

        //display message (success or not)
        if ($prep->execute()) {
            $form_msg = "<p style='color:green'>Ship inserted !</p>";
        } else {
            $form_msg = "<p style='color:red'>A problem occurred !</p>";
        }
    }
}

// close the connection
$pdo = null;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarDecover - Ships list</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <h1>StarDecover - Ships list</h1>
    <section id="ship-container">
        <div id="ship-list">
            <?php foreach ($ships as $ship) : ?>
                <div class="ship">
                    <img src="./assets/img/<?= $ship['picture'] ?>">
                    <p>Name : <?= $ship['name'] ?></p>
                    <p>Price : <?= $ship['price'] ?> $</p>
                    <p>Fast drive available : <?= ($ship['fast_drive']) ? 'Yes' : 'No'; ?></p>
                    <p>Description : <?= $ship['description'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <div id="insert-form">
            <h3>Create a new ship</h3>
            <?= (isset($form_msg)) ? $form_msg : ''; ?>
            <div class="errors">
                <?php
                if (isset($errors)) {
                    foreach ($errors as $err) {
                        echo "<p>$err</p>";
                    }
                }
                ?>
            </div>

            <form method="POST">
                <label for="name">Name :</label><br>
                <input class="input-form" type="text" name="name" id="name" placeholder="Name"><br>

                <label for="price">Price :</label><br>
                <input class="input-form" type="text" name="price" id="price" placeholder="Price"><br>

                <label for="picture">Picture :</label><br>
                <input class="input-form" type="text" name="picture" id="picture" placeholder="Picture"><br>

                <label for="fastdrive">Fastdrive :</label>
                <input type="checkbox" name="fastdrive" id="fastdrive"><br>

                <label for="name">Description :</label><br>
                <textarea name="description" id="" cols="30" rows="10"></textarea><br>

                <input class="input-form" type="submit" name="submitBtn" value="Insert">
            </form>
        </div>
    </section>
</body>

</html>