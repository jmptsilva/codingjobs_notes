<?php

// echo "my id : " . $_GET['id'];

if (!isset($_GET['id'])) {

    echo 'Forbidden.<br>';
    echo '<a href="songs.php">Go back</a>';
    die;
} else {

    $song_id = $_GET['id'];

    // 1. Connect to the DB
    $pdo = new PDO('mysql:host=localhost;dbname=spotify', 'jsilva', 'j0m4n3ls');

    $query = "SELECT *
            FROM songs s
            INNER JOIN artists a ON s.artist_id = a.id
            WHERE s.id = :id";

    // Prepare the query
    $prep = $pdo->prepare($query);
    // Bind the value to the placeholder
    $prep->bindValue(':id', $song_id);

    // Execute the query
    $prep->execute();
    // Fetch the results
    $song = $prep->fetch(PDO::FETCH_ASSOC);

    /* echo "<pre>";
    var_dump($song);
    echo "</pre>";
 */
    // Close the connection
    $pdo = null;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song Details</title>
</head>

<body>

    <a class="link_back" href="songs.php">Go back</a>
    <h2>Song details</h2>
    <div class="container">

        <div class="box">
            <p>
                <strong>Name: </strong>
                <?= $song['title']; ?>
            </p>
            <p>
                <strong>Date of release: </strong>
                <?= $song['release_date']; ?>
            </p>
            <p>
                <strong>Date of release: </strong>
                <?= $song['name']; ?>
            </p>

            <img src="./assets/images/<?= $song['poster']; ?>" width="200px" />

        </div>


    </div>
    <style>
        .link_back {
            padding: 30px;
            display: block;
        }

        .box {
            width: 100%;
            background-color: lightgray;
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;
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