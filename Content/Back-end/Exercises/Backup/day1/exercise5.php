<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops Ex.3</title>
</head>

<body>
    <?php
    $a = 0;
    $numbers = [];

    while ($a < 21) {
        $numbers[] = $a;
        $a++;
    };

    foreach ($numbers as $value) {
        echo "Number: $value<br>";
    };
    ?>
</body>

</html>