<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops Ex.6</title>
</head>

<body>
    <?php

    for ($i = 0; $i < 5; $i++) {
        $a = 0;
        while ($a <= $i) {
            echo "*";
            $a++;
        }
        echo '<br>';
    }

    ?>
</body>

</html>