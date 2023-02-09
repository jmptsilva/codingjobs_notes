<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops Ex.4</title>
</head>

<body>
    <?php
    $a = 1;
    $multOf2 = [];

    while ($a < 11) {
        $multOf2[$a] = $a * 2;
        $a++;
    };

    foreach ($multOf2 as $value) {
        echo "$value<br>";
    };
    ?>
</body>

</html>