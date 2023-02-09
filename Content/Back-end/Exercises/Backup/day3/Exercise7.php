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
        -- Exercice 6

        Write a function that checks if a number is a prime number.
        A prime number is an integer greater than 1 that can only be divided by itself and 1.

    */
    $numbers = [13, 2, 25, 52, 6];

    function revArray($array)
    {
        for ($i = 0; $i < count($array) / 2; $i++) {
            $tempValue = $array[$i];
            $array[$i] = $array[count($array) - 1 - $i];
            $array[count($array) - 1 - $i] = $tempValue;
        }
        return $array;
    }

    $newArray = revArray($numbers);
    var_dump($newArray);

    ?>
</body>

</html>