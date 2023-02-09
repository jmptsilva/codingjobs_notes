<?php
$conn = mysqli_connect('localhost', 'jsilva', 'j0m4n3ls', 'spotify');

if (!isset($_GET['page'])) {
    $_GET['page'] = 1;
}

if ($conn) {

    $nbElements = 4;

    /* if ($_GET['page'] == 1) {
        $elementStart = 0;
    } else {
        $elementStart = ($_GET['page'] - 1) * $nbElements;
    } */

    // or better, we can use the formula to start with 0:

    if (isset($_GET['page'])) {
        $elementStart = ($_GET['page'] - 1) * $nbElements;
    }

    $query = "SELECT s.title, a.name, s.release_date
    FROM songs s INNER JOIN artists a ON s.artist_id = a.id
    ORDER BY s.title ASC LIMIT " . $elementStart . ", " . $nbElements;

    $result = mysqli_query($conn, $query);

    $songs = mysqli_fetch_all($result, MYSQLI_ASSOC);

    /* echo '<pre>';
    var_dump($songs);
    echo '</pre>'; */
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

    <?php
    if ($conn) {

        $query = "SELECT COUNT(title) as number
        FROM songs";

        $qResult = mysqli_query($conn, $query);

        $nbSongs = mysqli_fetch_all($qResult, MYSQLI_ASSOC);

        /*  echo '<pre>';
        var_dump($nbSongs);
        echo '</pre>'; */

        mysqli_close($conn);
    } else {
        echo 'Problem connecting to the DB<br>';
    }

    $nextPage = $_GET['page'];
    $prevPage = $_GET['page'];

    if ($_GET['page'] > 1) {
        $prevPage -= 1;
        echo '<a href="Exercise.php?page=' . $prevPage . '">Previous page</a><br>';
    }

    if ($_GET['page'] < ($nbSongs[0]['number'] / $nbElements)) {
        $nextPage += 1;
        echo '<a href="Exercise.php?page=' . $nextPage . '">Next page</a>';
    }
    ?>

</body>

</html>