<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions Ex. 3</title>
</head>

<body>
    <?php
    $fruits = array("Salad" => 1.03, "Tomato" => 2.3, "Oignon" => 1.85, "Red cabbage" => 0.85);
    $sweets = array("Gum" => 1.03, "Candy" => 2.3, "Chocolate" => 1.85);

    function calcTotal($array)
    {
        $sum = 0;
        foreach ($array as $value) {
            $sum += $value;
        }
        echo "$sum € <br>";
    }

    calcTotal($fruits);
    calcTotal($sweets);

    ?>
</body>

</html>