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

    if (isset($_POST['resetBtn'])) {
        $count = 1;
        setcookie("nbrVisits", $count, time() - 200);
        unset($_COOKIE['nbrVisits']);
    }

    if (!isset($_COOKIE['nbrVisits'])) {
        $firstView = time();
        $count = 1;
        setcookie("nbrVisits", $count, time() + 200);
        setcookie("firstView", $firstView, time() + 200);
    } else {
        $count = ++$_COOKIE['nbrVisits'];
        setcookie("nbrVisits", $count, time() + 200);
        echo 'First time: ' . date("d-m-Y H:i:s", $_COOKIE['firstView']) . '<br>';
    }

    echo "Number of times visited: $count<br>";





    ?>

    <form method="POST">
        <button type="submit" name="resetBtn">Reset</button>
    </form>
</body>

</html>