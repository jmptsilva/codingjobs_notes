<?php

session_start();

// connect to the db
require_once 'database.php';

// prepare the query
$query = "SELECT * FROM movies";

$result = mysqli_query($conn, $query);
$movies = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<?php foreach ($movies as $movie) : ?>
    <div class="movie-card">
        <img src="./assets/img/posters/<?= $movie['poster']; ?>" alt="" width="150px">

        <p>
            <a href="./movie-details.php?id=<?= $movie['id']; ?>"><?= $movie['title']; ?></a>

            (<?= substr($movie['release_date'], 0, 4) ?>)
        </p>

        <p><?= strlen($movie['description']) > 30 ? substr($movie['description'], 0, 30) . '...' : $movie['description'] ?></p>

        <?php if (isset($_SESSION['email'])) : ?>
            <a href="./insert-movie-watchlist.php?id=<?= $movie['id']; ?>">Add to my watchlist</a>
        <?php endif; ?>
    </div>
<?php endforeach; ?>