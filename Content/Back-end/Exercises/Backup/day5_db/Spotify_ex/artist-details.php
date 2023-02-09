<?php

// echo "my id : " . $_GET['id'];


$conn = mysqli_connect('localhost', 'jsilva', 'j0m4n3ls', 'spotify');

if ($conn) {
    $query = "SELECT * FROM artists WHERE id =" . $_GET['id'];

    $result = mysqli_query($conn, $query);

    $artists = mysqli_fetch_all($result, MYSQLI_ASSOC);

    /*  echo '<pre>';
    var_dump($artists);
    echo '</pre>'; */

    mysqli_close($conn);
} else {
    echo 'Problem connecting to the DB<br>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Details</title>
</head>

<body>
    <?php
    require_once 'nav.html';
    ?>
    <a class="link_back" href="artists.php">Go back</a>
    <h2><?= $artists[0]['name']; ?> details</h2>
    <div class="container">
        <?php foreach ($artists as $artist) : ?>
            <div class="box">
                <p>
                    <strong>Name: </strong>
                    <?= $artist['name']; ?>
                </p>
                <p>
                    <strong>Date of birth: </strong>
                    <?= $artist['birth_year']; ?>
                </p>
                <p>
                    <strong>Biography: </strong>
                    <?= $artist['biography']; ?>
                </p>
                <img src="./assets/images/<?= $artist['poster']; ?>" width="200px" />

            </div>

        <?php endforeach ?>


    </div>
    <style>
        .link_back {
            padding: 30px;
            display: block;
        }

        .box {
            width: 100%;
            background-color: lightgray;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
            border-radius: 5px;
            padding: 8px;
        }

        h2 {
            padding: 20px;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        .container {
            padding: 20px;
            gap: 80px;
            display: flex;
            flex-direction: row;
        }

        p {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 5px;
        }
    </style>
</body>

</html>