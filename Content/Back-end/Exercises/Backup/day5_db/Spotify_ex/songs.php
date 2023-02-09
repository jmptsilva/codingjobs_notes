<?php

$conn = mysqli_connect('localhost', 'jsilva', 'j0m4n3ls', 'spotify');

if ($conn) {
    $query = "SELECT s.title, c.type FROM songs s INNER JOIN categories c ON s.categ_id = c.id";

    $result = mysqli_query($conn, $query);

    $songs = mysqli_fetch_all($result, MYSQLI_ASSOC);

    /*  echo '<pre>';
    var_dump($songs);
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
    <title>Songs</title>
</head>

<body>

    <?php
    require_once 'nav.html';
    ?>

    <h2>Songs page</h2>

    <?php foreach ($songs as $song) : ?>

        <p>
            <strong>Title: </strong>
            <?= $song['title']; ?>
        </p>
        <p>
            <strong>Category: </strong>
            <?= $song['type']; ?>
        </p>

        <hr>

    <?php endforeach ?>
</body>

</html>