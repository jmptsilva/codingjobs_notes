<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions Ex. 7</title>
</head>

<body>


    <?php
    /*
   
   -- Exercise 1 :

	Write a function that : 
		- Take one float $x as argument
		- Get the integer part of a positive number ($x)
		- Return this integer part

	Example :
		integerPart(5.26) // return 5
		integerPart(10.76) // return 10
*/

    // with a function round();

    function intPart($x)
    {
        return round($x, 0, PHP_ROUND_HALF_DOWN);
    }

    // echo intPart(3.42);

    // without a predefined function, with a loop:

    function integerPart($x)
    {
        for ($i = 0; $i < $x; $i++) {
        }
        return $i - 1;
    }

    echo integerPart(32.445);

    ?>
</body>

</html>