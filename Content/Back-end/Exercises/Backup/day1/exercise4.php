<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops Ex.2</title>
</head>

<body>
    <?php
    $fruits = array("Salad" => 1.03, "Tomato" => 2.3, "Oignon" => 1.85, "Red cabbage" => 0.85);

    asort($fruits);

    echo "<strong>Ascending order:</strong><br><br>";
    foreach ($fruits as $key => $value) {
        echo "Item: $key | Price: $value €<br>";
    }

    krsort($fruits);

    echo "<br><br><strong>Descending order by item name:</strong><br><br>";
    foreach ($fruits as $key => $value) {
        echo "Item: $key | Price: $value €<br>";
    }

    echo "<br><br><strong>Total Price:</strong> ";

    $sum = 0;

    foreach ($fruits as $value) {
        $sum += $value;
    }

    echo "$sum €";
    ?>
</body>

</html>