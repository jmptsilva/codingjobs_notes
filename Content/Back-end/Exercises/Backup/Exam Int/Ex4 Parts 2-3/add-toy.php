<?php

// Message placeholder
$msg = '';

// require the connection (handle the query)
require_once 'database.php';

// variables for form data
$name = '';
$photo = '';
$description = '';
$type = '';
$price = '';

if (isset($_POST['addBtn'])) {

    // create the array to store the errors (to display when needed)
    $errors = array();

    // Check if the inputs exist and not empty (except for description and photo);
    if (empty($_POST['name']))
        $errors['name'] = 'Name is mandatory';
    else
        $name = $_POST['name'];

    $photo = $_POST['photo'];

    $description = $_POST['description'];

    if (empty($_POST['price']) or !is_numeric($_POST['price']))
        $errors['price'] = 'Price is mandatory';
    else
        $price = $_POST['price'];

    if (empty($_POST['type']))
        $errors['type'] = 'Type is mandatory';
    else
        $type = $_POST['type'];

    // Insert if no errors
    if (empty($errors)) {
        $query = "INSERT INTO toys(name, price, description, photo, type)
            VALUES('$name', $price, '$description', '$photo', '$type')";

        $result = mysqli_query($conn, $query);

        if ($result)
            echo '<span class="success" style="color: green;">Successfully added !</span>';
        else
            echo '<span class="error" style="color: red;">Problem adding to the database.</span>';
    } else {
        foreach ($errors as $key => $msg) {
            echo "<span class='error' style='color: red;'>$msg</span><br>";
        }
    }
}

// close the connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a new toy</title>
    <link rel="stylesheet" href="global.css">
</head>

<body>
    <h1>Add a new toy</h1>

    <!-- Form to add toy -->
    <form method="POST">
        <div>
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="Name of toy">
        </div>

        <div>
            <label for="photo">Photo: </label>
            <input type="text" name="photo" placeholder="Photo URL">
        </div>
        <div>
            <label for="type">Type: </label>
            <select name="type">
                <option value="dolls">Doll</option>
                <option value="mechanic">Mechanic</option>
                <option value="puzzle">Puzzle</option>
            </select>
        </div>
        <div>
            <label for="price">Price: </label>
            <input type="number" name="price" placeholder="€">
        </div>
        <div>
            <label for="description">Description: </label>
            <textarea name="description" placeholder="Small description of toy"></textarea>
        </div>

        <input type="submit" name="addBtn" value="Add toy to DB">
    </form>
</body>

</html>