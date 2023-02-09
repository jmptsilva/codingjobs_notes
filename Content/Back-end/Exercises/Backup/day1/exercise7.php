<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops Ex.5</title>
</head>

<body>
    <?php
    $i = 0;
    $numbers = [13, 64, 5, 142];

    for ($count = 0; $count < count($numbers); $count++) {
        if ($i < $numbers[$count])
            $i = $numbers[$count];
    }

    echo $i
    ?>
</body>

</html>