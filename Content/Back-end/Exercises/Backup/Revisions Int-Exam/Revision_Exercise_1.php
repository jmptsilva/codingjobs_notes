<?php

/*
	1. Display the type of each variable at the end of the script (using only one function)
	2. Display the type AND the value of each variable (using only one function)
*/

echo '<h3>Exercise 1</h3>';

function displayVar($variable)
{
	echo 'Variable $x - ' . gettype($variable) . '(' . $variable . ')<br>';
}

$x = 5;
displayVar($x);

$y = "1";
displayVar($y);

$z = true;
displayVar($z);

$n = 2.5;
displayVar($n);

$z = $x + $y;
displayVar($z);

$k = $n * $y;
displayVar($k);



/*
	Show the date (in a nice format) for :
		- Today
		- Tomorrow
		- The same date than today one month later
*/

echo '<hr>';
echo '<h3>Exercise 2</h3>';

echo date('D, d M, Y') . "<br>";
echo date('D, d M, Y', strtotime('tomorrow')) . "<br>";
echo date('D, d M, Y', strtotime('+30 days')) . "<br>";

/*
	Create an array with the numbers from 1 to 100 : Create it dynamically using a loop.
	Once it has been created, display it in a HTML list (ul/li)

	Use one loop to create the array.
	Use a second loop to display it.
*/
echo '<hr>';
echo '<h3>Exercise 3</h3>';

$numbers = array();

for ($i = 1; $i < 101; $i++) {
	array_push($numbers, $i);
}

foreach ($numbers as $number) {
	echo $number . ' -- ';
}

/* echo '<pre>';
var_dump($numbers);
echo '</pre>'; */

/*
	Practice query using the moviedb :
	1. Connect to DB and choose the moviedb
	2. Go to SQL tab and run a query to get all movies by George Lucas
	3. Display the movies in a HTML <table>
		You should display title, views, the poster and the name of the director.
*/

echo '<hr>';
echo '<h3>Exercise 4</h3>';

$conn = mysqli_connect('localhost', 'jsilva', 'j0m4n3ls', 'bu_project');

$query = "SELECT *
FROM movies m
INNER JOIN directors d ON m.director_id = d.id
WHERE director_id = 3";

$result = mysqli_query($conn, $query);

$movies = mysqli_fetch_all($result, MYSQLI_ASSOC);

/* echo '<pre>';
var_dump($movies);
echo '</pre>'; */
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rev. Exercises 1</title>
</head>

<body>
	<h2>Movies from <?= $movies[0]['first_name'] . ' ' . $movies[0]['last_name'] ?></h2>
	<table>
		<tr>
			<td>Name</td>
			<td>Year of release</td>
			<td>Description</td>
			<td>Poster</td>
		</tr>
		<?php foreach ($movies as $movie) : ?>

			<tr>
				<th><?= $movie['title'] ?></th>
				<td><?= $movie['release_date'] ?></td>
				<td><?= $movie['description'] ?></td>
				<td>
					<img src="../day10/BU_project Ex. Edit-update db/assets/img/posters/<?= $movie['poster'] ?>" alt="movie poster" width="100px">
				</td>
			</tr>

		<?php endforeach ?>
	</table>
</body>

</html>