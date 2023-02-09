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
-- Exercise 2 : 
	Write a function 'isOrder' that :
		- Take one array of integer as argument
		- Checks if the elements of the arrays are ordered in ascending order.
*/


    function isOrder($array)

    {
        $length = count($array);
        for ($i = 0; $i < $array; $i++) {
        }
        return $i - 1;
    }

    echo isOrder();

    ?>
</body>

</html>