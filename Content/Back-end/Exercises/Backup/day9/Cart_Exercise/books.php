<?php

session_start();

// add to cart
if (isset($_POST['addCart'])) {
    if (!empty($_POST['title']) && !empty($_POST['price'])) {

        $bookToAdd = [
            'title' => $_POST['title'],
            'price' => $_POST['price'],
            'quantity' => 1
        ];

        $bookId = $_POST['id'];

        if (isset($_SESSION['cart'][$bookId])) {
            $_SESSION['cart'][$bookId]['quantity'] += 1;
        } else {
            $_SESSION['cart'][$bookId] = $bookToAdd;
        }
    }
}

$nbPage = 1;

if (isset($_GET['page']))
    $nbPage = $_GET['page'];

$howManyPerPage = 2;
$start = $howManyPerPage * ($nbPage - 1);

$conn = mysqli_connect('localhost', 'jsilva', 'j0m4n3ls', 'book_store');

// Retrieve books
$query = "SELECT *
FROM books
LIMIT $start, $howManyPerPage";
$result = mysqli_query($conn, $query);
$books = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Get the total number of pages
$query = "SELECT COUNT(*) as nbBooks FROM books";
$result = mysqli_query($conn, $query);
$queryResult = mysqli_fetch_assoc($result);
$totalPages = $queryResult['nbBooks'] / $howManyPerPage;

mysqli_close($conn);

$previous = $nbPage - 1;
$next = $nbPage + 1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book store</title>
</head>

<body>

    <?php require_once 'nav.php'; ?>

    <h1>Books List</h1>

    <?php foreach ($books as $book) : ?>

        <p>
            <strong>Title : </strong>
            <?= $book['title']; ?>
        </p>

        <p>
            <strong>Price : </strong>
            <?= $book['price']; ?>
        </p>

        <form method="post">
            <input type="hidden" name="title" value="<?= $book['title']; ?>">
            <input type="hidden" name="price" value="<?= $book['price']; ?>">
            <input type="hidden" name="id" value="<?= $book['id']; ?>">
            <button type="submit" name="addCart">Add to cart</button>
        </form>

        <hr>

    <?php endforeach; ?>

    <?php
    /* echo '<pre>';
    var_dump($books);
    echo '</pre>'; */
    ?>

    <?php if ($nbPage > 1) : ?>
        <a href="books.php?page=<?= $previous ?>">Previous</a>
    <?php endif; ?>

    <?php if ($nbPage < $totalPages) : ?>
        <a href="books.php?page=<?= $next ?>">Next</a>
    <?php endif; ?>

    <?php

    echo '<pre>';
    var_dump($_SESSION);
    echo '</pre>';
    ?>
</body>

</html>