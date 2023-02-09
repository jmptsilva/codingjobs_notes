<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions Ex. 6</title>
</head>

<body>


    <?php
    /*
        -- Exercice 6

        Write a function that checks if a number is a prime number.
        A prime number is an integer greater than 1 that can only be divided by itself and 1.

    */


    function isPrime($number)
    {
        if ($number <= 1) {
            return 'Number should be > 1<br>';
        }
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }
        return true;
    }

    echo isPrime(1) ? 'It is a prime!' : 'Not a prime';

    ?>
</body>

</html>