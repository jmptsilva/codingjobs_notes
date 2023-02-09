<?php

require_once 'Flower.php';
require_once 'FlowerManager.php';

if (!isset($_GET['id'])) {
    echo 'Forbidden page.';
    echo '<a class="link_back" href="view-flowers.php">Go back</a>';
    die;
} else {
    $flower = FlowerManager::find($_GET['id']);
}

/* echo '<pre>';
var_dump($flower);
echo '</pre>'; */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Details</title>
</head>

<body>

    <a class="link_back" href="view-flowers.php">Go back</a>
    <h2>Flower details</h2>
    <div class="container">

        <div class="box">
            <p>
                <strong>Name: </strong>
                <?= $flower->name; ?>
            </p>
            <p>
                <strong>Price: </strong>
                <?= $flower->price; ?>
                <strong> € / unit</strong>
            </p>

            <!-- <img src="./assets/images/<?= $song->poster; ?>" width="200px" /> -->

        </div>


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