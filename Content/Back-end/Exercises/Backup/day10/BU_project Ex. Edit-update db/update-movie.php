<?php

// Handle query
require_once 'database.php';

// Handle errors messages
$errors = array();

// Check if TITLE already exists and not empty
if (empty($_POST['m-title']))
    $errors['movie-title'] = 'Title is mandatory';
else
    $title = $_POST['m-title'];

/* if ($_POST['m-title'] == $movie_details[0]['title']))
    $errors['movie-title'] = 'Title is mandatory';
else
    $title = $_POST['m-title']; */



// Check if POSTER is existing and not empty
if (empty($_POST['m-poster']))
    $errors['poster'] = 'Poster is mandatory';
else
    $poster = $_POST['m-poster'];

// Check if DESCRIPTION is existing and not empty
if (empty($_POST['m-descrip']))
    $errors['description'] = 'Description is mandatory';
else
    $description = $_POST['m-descrip'];

// Check if RELEASE DATE is existing and not empty
if (empty($_POST['m-date']))
    $errors['release_date'] = 'Date is mandatory';
else
    $release_date = $_POST['m-date'];

// Check if DIRECTOR is existing and not empty
if (empty($_POST['m-director']))
    $errors['director'] = 'Director is mandatory';
else
    $director_id = $_POST['m-director'];

// Insert if no errors
if (empty($errors)) {
    $query = "UPDATE movies
    SET title = '" . $title . "', description = '" . $description . "', release_date = '" . $release_date . "', director_id = " . $director_id . ", poster = '" . $poster . "' WHERE id = " . $_GET['id'];

    $result = mysqli_query($conn, $query);

    if ($result)
        echo '<span class="success">Successfully inserted !</span>';
    else
        echo '<span class="error">Problem inserting in the database.</span>';
} else {
    foreach ($errors as $key => $msg) {
        echo "<span class='error'>$key : $msg</span><br>";
    }
}
