<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Ex.</title>
</head>

<body>
    <?php
    $stock = [
        "Tshirts" => 20,
        "Caps" => 10,
        "Shoes" => 5
    ];

    echo '<p>Caps stock:</p>' . $stock["Caps"];

    $stock["Caps"] = $stock["Caps"] + 5;
    $stock["Shoes"] = $stock["Shoes"] + 20;

    echo '<p>Shoes stock:</p>' . $stock["Shoes"];
    ?>
</body>

</html>