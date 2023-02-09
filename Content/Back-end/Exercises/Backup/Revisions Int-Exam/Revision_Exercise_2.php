<?php

/*
    -- Exercise 1 :
    
    Thanks to that array : 
    $array = array(
        'lastname' => 'simon',
        'firstname' => 'simon',
        'phone' => '+3526455748'
        'mail' => 'simon@simon.fr',
        'address' => '6 rue de la gare',
        'city' => 'Mondelange'
    );

    Using a loop, display the content of this array (keys and values)
*/

echo '<hr>';
echo '<h3>Exercise 1</h3>';

$array = [
	'lastname' => 'simon',
	'firstname' => 'simon',
	'phone' => '+3526455748',
	'mail' => 'simon@simon.fr',
	'address' => '6 rue de la gare',
	'city' => 'Mondelange'
];

foreach ($array as $key => $value) {
	echo "$key -> $value <br>";
}

/*

	-- Exercise 2 :

	Write a function that:
	    - Takes two arguments as numbers.
		- Function should make sure the arguments are numbers
	    - Check which is the largest number.
		- RETURN the message (don't echo inside the function)

	The expected result is this:
		If one of the arguments is not a number, display : 
			'Expecting numbers !!!';
		Else : 
		    The first number is larger (if the first number is larger than the second number)
	    	The first number is smaller (if the first number is smaller than the second number)
		    The two numbers are identical (if the two numbers are equal)

*/

echo '<hr>';
echo '<h3>Exercise 2</h3>';

function isGreater($a, $b)
{
	if (gettype($a) !== 'integer' or gettype($b) !== 'integer') {
		return 'Please insert only numbers!';
	} else {
		if ($a === $b) {
			return "The numbers have the same value ($a is equal to $b).";
		} else if ($a < $b) {
			return "The first number($a) is smaller than the second($b).";
		} else {
			return "The first number($a) is greater than the second($b).";
		}
	}
};

echo isGreater(14, 12);
