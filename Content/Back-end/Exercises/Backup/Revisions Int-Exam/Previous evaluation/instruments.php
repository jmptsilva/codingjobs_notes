<?php

// Message placeholder
$msg = '';

// Handle query
require_once 'database.php';

$query = "SELECT * FROM instruments";

$result = mysqli_query($conn, $query);

$instruments = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instruments List</title>
</head>

<body>
    <h1>Instruments list</h1>


    <p class="message"><?= $msg; ?></p>

    <div id="instruments-list">

        <?php foreach ($instruments as $instrument) : ?>

            <div class="instrument-card">
                <h3><?= $instrument['name']; ?></h3>

                <p><?= strlen($instrument['description']) > 30 ? substr($instrument['description'], 0, 30) . '...' : $instrument['description'] ?></p>

                <p>
                    <a href="./instrument-details.php?id=<?= $instrument['id']; ?>">More details...</a>
                </p>

            </div>

        <?php endforeach; ?>
    </div>
</body>

</html>