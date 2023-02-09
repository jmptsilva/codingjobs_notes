<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops Ex.</title>
</head>

<body>
    <?php

    $characterStats = [
        "firstName" => "Carlos",
        "lastName" => "Maya",
        "nickname" => "MayaCatta",
        "atkPoints" => 13,
        "dfPoints" => 10,
        "dodge%" => 3,
    ];

    foreach ($characterStats as $key => $value) {
        echo "<div>$key: $value</div>";
    };
    ?>
</body>

</html>