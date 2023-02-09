<?php

// Handle query
require_once 'database.php';

$query = "SELECT * FROM toys";

$result = mysqli_query($conn, $query);

$toys = mysqli_fetch_all($result, MYSQLI_ASSOC);

// in case of no results
if (!$result)
    echo '<span class="error" style="color: red;">No items to show</span>';

// close connection
mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toys List</title>
    <link rel="stylesheet" href="global.css">
</head>

<body>
    <h1>Toys available</h1>

    <!-- table to display toys -->
    <div>
        <table>
            <tr>
                <td>Name</td>
                <td>Price</td>
                <td>Type</td>
                <td>Description</td>
                <td>Photo</td>
            </tr>
            <?php foreach ($toys as $toy) : ?>

                <tr>
                    <th><?= strtoupper($toy['name']) ?></th>
                    <td><?= $toy['price'] . ' €' ?></td>
                    <td><?= $toy['type'] ?></td>
                    <td><?= strlen($toy['description']) > 30 ? substr($toy['description'], 0, 30) . '...' : $toy['description'] ?></td>
                    <td>
                        <img src="assets/img/photos/<?= $toy['photo'] ?>" alt="toy photo" width="100px">
                    </td>
                </tr>

            <?php endforeach ?>
        </table>
    </div>
</body>

</html>