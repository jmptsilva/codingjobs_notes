<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions Ex. 4</title>
</head>

<body>
    <?php

    function calcMult($a = 1, $b = 2)
    {
        return $a * $b;
    }

    echo calcMult(10, 2);
    echo calcMult(4);

    ?>
</body>

</html>