<?php

// 1. Connect to the DB
$pdo = new PDO('mysql:host=localhost;dbname=spotify', 'jsilva', 'j0m4n3ls');

$query = 'SELECT * FROM songs';

$result = $pdo->query($query);

// 3. Fetch the results
$songs = $result->fetchAll(PDO::FETCH_ASSOC);

// Close the connection
$pdo = null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs</title>
</head>

<body>

    <h2>Songs page</h2>

    <?php foreach ($songs as $song) : ?>

        <p>
            <strong>Title: </strong>
            <?= $song['title']; ?>
        </p>
        <p>
            <strong>Release date: </strong>
            <?= $song['release_date']; ?>
        </p>

        <div class="details_link"><a href="song-details.php?id=<?= $song['id']; ?>">+ details...</a></div>

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