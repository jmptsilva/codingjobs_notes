<?php
$totalBooks = 0;
$totalPrice = 0;

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $books) {
        $totalBooks += $books['quantity'];
        $totalPrice += $books['price'];
    }
}

?>

<nav>
    <ul>
        <li>
            <a href="./books.php">Books</a>
        </li>
        <li>
            <a href="./cart.php">Cart (<?= $totalBooks ?>)</a>
        </li>
    </ul>
</nav>