<?php

// Check for id in the URL
if (!isset($_GET['id'])) {
    die('You should not access this page');
} else if (!is_numeric($_GET['id'])) {
    die('Trying to access something forbidden.');
}

// Handle query
require_once 'database.php';
$query = "SELECT * FROM instruments WHERE id = " . $_GET['id'];;
$result = mysqli_query($conn, $query);
$instrument = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrument details</title>
</head>

<body>

    <?php

    if (!$instrument['id']) {
        echo '<a href="instruments.php">Return to instruments page</a>';
        die;
    }

    ?>

    <h1><?= $instrument['name']; ?></h1>

    <div id="instrument-details">
        <div class="instrument-card">
            <img src="./assets/img/posters/<?= $instrument['photo']; ?>" alt="">

            <p>
                <strong>Price : <?= $instrument['price']; ?> €</strong>
            </p>
            <p>
                <strong>Brand : </strong>
                <?= $instrument['brand_name']; ?>
            </p>

            <p>
                <strong>Description : </strong>
                <?= $instrument['type']; ?>
            </p>
            <p>
                <strong>Description : </strong>
                <?= $instrument['description']; ?>
            </p>
        </div>
    </div>
</body>

</html>