<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Cookie</title>
</head>

<body>
    <?php
    $visits = 0;

    setcookie("viewed", "true", time() + 5);
    setcookie("nbrVisits", $visits += 1, time() + 200);

    ?>
</body>

</html>