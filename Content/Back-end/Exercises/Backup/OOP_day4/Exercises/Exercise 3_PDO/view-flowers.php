<?php

require_once 'Flower.php';
require_once 'FlowerManager.php';

$flowers = FlowerManager::findAll();

/* echo '<pre>';
var_dump($flowers);
echo '</pre>'; */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower list</title>
</head>

<body>

    <h2>Flowers page</h2>

    <?php foreach ($flowers as $flower) : ?>

        <p>
            <strong>Name: </strong>
            <?= $flower->name; ?>
        </p>
        <p>
            <strong>Price: </strong>
            <?= $flower->price; ?>
            <strong> € / unit</strong>
        </p>
        <a href="flower-details.php?id=<?= $flower->id; ?>">+ details...</a>

        <hr>

    <?php endforeach ?>

    <style>
        .details_link {
            padding: 10px;
        }

        .box {
            width: 200px;
            background-color: lightgray;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
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