<?php

$conn = mysqli_connect('localhost', 'jsilva', 'j0m4n3ls', 'spotify');

if ($conn) {
    $query = "SELECT name, poster, birth_year, id FROM artists";

    $result = mysqli_query($conn, $query);

    $artists = mysqli_fetch_all($result, MYSQLI_ASSOC);

    /*  echo '<pre>';
    var_dump($artists);
    echo '</pre>'; */

    mysqli_close($conn);
} else {
    echo 'Problem connecting to the DB<br>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artists</title>
</head>

<body>

    <?php
    require_once 'nav.html';
    ?>

    <h2>Artists page</h2>

    <div class="container">
        <?php foreach ($artists as $artist) : ?>

            <div class="box">
                <p>
                    <strong>Name: </strong>
                    <?= $artist['name']; ?>
                </p>
                <p>
                    <strong>Date of birth: </strong>
                    <?= $artist['birth_year']; ?>
                </p>
                <img src="./assets/images/<?= $artist['poster']; ?>" width="200px" />

                <div class="details_link"><a href="artist-details.php?id=<?= $artist['id']; ?>">+ details...</a></div>
            </div>


        <?php endforeach ?>

    </div>
    <style>
        .details_link {
            padding: 10px;
        }

        .box {
            width: 200px;
            background-color: lightgray;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-radius: 5px;
            padding: 8px;
        }

        h2 {
            padding: 20px;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }

        .container {
            padding: 20px;
            gap: 80px;
            display: flex;
            flex-direction: row;
        }

        p {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 5px;
        }
    </style>

</body>

</html>