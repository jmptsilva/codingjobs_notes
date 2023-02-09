<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>

<body>
    <?php require_once 'nav.php'; ?>

    <?php

    /* if (isset($_POST['resetCart'])) {
        //unset($_SESSION['numberItems']);
        // $_SESSION['numberItems'] = 0;
        unset($_SESSION['cart']);
    } */


    ?>

    <h1>Cart</h1>
    <!--  <h2>To-do</h2> -->

    <?php foreach ($_SESSION['cart'] as $bookId => $book) : ?>

        <p>
            <strong>Title : </strong>
            <?= $book['title']; ?>
        </p>

        <p>
            <strong>Price : </strong>
            <?= $book['price'] . " €"; ?>
        </p>

        <p>
            <strong>Number of copies : </strong>
            <?= $book['quantity']; ?>
        </p>

        <hr>

    <?php endforeach; ?>

    <p>
        <strong>Total : </strong>
        <?= $totalPrice . " €"; ?>
    </p>

    <!-- <form method="post">
        <button type="submit" name="resetCart">Empty cart</button>
    </form> -->
</body>

</html>