<?php
$conn = mysqli_connect('localhost', 'jsilva', 'j0m4n3ls', 'spotify');

if ($conn) {
    $query = "SELECT s.title, s.release_date, a.name FROM songs s INNER JOIN artists a ON s.artist_id = a.id ORDER BY s.release_date DESC LIMIT 3";

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
    <title>Index</title>
</head>

<body>
    <?php
    require_once 'nav.html';
    ?>

    <h2>Latest songs</h2>

    <?php foreach ($songs as $song) : ?>

        <p>
            <strong>Title: </strong>
            <?= $song['title']; ?>
        </p>
        <p>
            <strong>Artist: </strong>
            <?= $song['name']; ?>
        </p>
        <p>
            <strong>Date: </strong>
            <?= $song['release_date']; ?>
        </p>


        <hr>

    <?php endforeach ?>
</body>

</html>