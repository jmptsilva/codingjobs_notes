<?php

$array = [5, 2, 3, 6, 7];
$nbElements = count($array);

/* Examples :

	Write a function call 'FizzBuzz'.
	For each number of the list, we want the following operations:
		. if the number is divisible by 3 : display 'Fizz'
		. if the number is divisible by 5 : display 'Buzz'
		. if the number is divisible by 3 AND by 5 : display 'TicTac'
		. else : display the number itself */

foreach ($array as $number) {
    if ($number % 3 === 0 and $number % 5 === 0) {
        echo 'TicTac!<br>';
    } else if ($number % 3 === 0) {
        echo 'Fizz!<br>';
    } else if ($number % 5 === 0) {
        echo 'Buzz!<br>';
    } else {
        echo "$number<br>";
    }
}
