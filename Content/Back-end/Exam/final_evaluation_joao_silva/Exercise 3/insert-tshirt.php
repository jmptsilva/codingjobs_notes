<?php

$name = "";
$price = "";
$color = "";
$size = "";
$description = "";

$errors = array();

if (empty($_POST['name'])) {
    $errors['name'] = 'Name is mandatory.';
} else {
    $name = trim($_POST['name']);
}

if (empty($_POST['price'])) {
    $errors['price'] = 'Price is mandatory.';
} else if (!is_numeric($_POST['price'])) {
    $errors['price'] = 'Only numbers are allowed in this field.';
} else {
    $price = trim($_POST['price']);
}

if (empty($_POST['color'])) {
    $errors['color'] = 'Color is mandatory.';
} else {
    $color = trim($_POST['color']);
}

if (empty($_POST['size'])) {
    $errors['size'] = 'Size is mandatory.';
} else {
    $size = $_POST['size'];;
}

if (empty($_POST['description'])) {
    $errors['description'] = 'Description is mandatory.';
} else {
    $description = trim($_POST['description']);
}

if (empty($errors)) {

    // Try to insert
    require_once 'database.php';

    $prep = $pdo->prepare('INSERT INTO tshirts(name, price, color, size, description)
            VALUES(:name, :price, :color, :size, :description)');

    $prep->bindValue(':name', $name);
    $prep->bindValue(':price', $price);
    $prep->bindValue(':color', $color);
    $prep->bindValue(':size', $size);
    $prep->bindValue(':description', $description);

    $result = $prep->execute();
    $pdo = null;

    if ($result)
        echo '{ "success": "Successfully inserted in the DB!" }';
    else
        echo '{ "error": "Prolem, try again later." }';
} else {
    echo json_encode($errors);
}
