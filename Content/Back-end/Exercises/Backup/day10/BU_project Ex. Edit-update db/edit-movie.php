<?php

require_once 'database.php';

$query = "SELECT *
FROM movies";

$result = mysqli_query($conn, $query);

$movies = mysqli_fetch_all($result, MYSQLI_ASSOC);

/* echo '<pre>';
var_dump($movies);
echo '</pre>'; */


if (isset($_GET['selectM'])) {
    header('Location: edit-movie.php?id=' . $_GET['m-select']);
}

if (!isset($_GET['id'])) {
    $_GET['id'] = 1;
}

if (isset($_POST['submitBtn'])) {
    require_once 'update-movie.php';
}

$movieID = $_GET['id'] - 1;

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a movie</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/form.css">
</head>

<body>

    <nav id="main-navbar">
        <?php
        require_once 'nav.php';
        ?>
    </nav>
    <form method="get" id="select-form">
        <select name="m-select" id="m-list">
            <?php foreach ($movies as $movie) : ?>
                <option value="<?= $movie['id']; ?>"><?= $movie['title'] ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit" name="selectM">Get info</button>
        <br>
    </form>
    <form method="post">
        <input name="m-title" type="text" value="<?= $movies[$movieID]['title'] ?>">
        <br>
        <input name="m-date" type="number" value="<?= $movies[$movieID]['release_date'] ?>">
        <br>
        <input name="m-director" type="number" value="<?= $movies[$movieID]['director_id'] ?>">
        <br>
        <textarea name="m-descrip" value=""><?= $movies[$movieID]['description'] ?></textarea>
        <br>
        <input name="m-poster" type="text" value="<?= $movies[$movieID]['poster'] ?>">
        <br>
        <button type="submit" name="submitBtn">Update movie info</button>
    </form>
    <style>
        #select-form {
            margin-top: 80px;
        }
    </style>
</body>

</html>