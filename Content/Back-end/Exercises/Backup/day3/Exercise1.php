<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions Ex. 1</title>
</head>

<body>
    <?php

    function compare($a, $b)
    {
        if ($a > $b) {
            echo "The first number is higher!";
        } else if ($a === $b) {
            echo "The numbers have the same value!";
        } else {
            echo "The first number is smaller!";
        }
    }

    compare(3, 4);


    ?>
</body>

</html>