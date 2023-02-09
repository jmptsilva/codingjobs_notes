<?php

$director_id = '';

// Handle query
require_once 'database.php';
$query = "SELECT * FROM directors ORDER BY last_name";
$result = mysqli_query($conn, $query);
$directors = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_close($conn);
?>

<?php foreach ($directors as $d) : ?>
    <option value="<?= $d['id']; ?>"><?= $d['first_name'] . ' ' . $d['last_name'] ?></option>
<?php endforeach; ?>