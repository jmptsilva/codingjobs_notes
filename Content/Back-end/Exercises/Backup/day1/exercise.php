<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Var&Condition&Disp Ex.</title>
</head>

<body>
    <?php

    $avatar = 'https://cdn-icons-png.flaticon.com/512/147/147144.png';
    $firstName = 'Carlos';
    $lastName = 'Maya';
    $attackPoints = 13;
    $defensePoints = 8;

    echo "<img src=\"$avatar\"/ width=\"150px\"><br>";
    echo 'Name - ' . $firstName . ' ' . $lastName;
    echo "<br>AP: $attackPoints damage";
    echo "<br>DP: $defensePoints blocked damage";

    if ($attackPoints > 9 || $defensePoints > 9)
        echo "<div class=\"alert\"><strong>Congratulations !</strong> Your character is ready to fight.</strong></div>"
    ?>
</body>

</html>