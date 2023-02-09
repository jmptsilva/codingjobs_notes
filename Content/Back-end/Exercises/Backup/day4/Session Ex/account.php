<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account page</title>
</head>

<body>
    <?php

    if (!isset($_SESSION['isLogged'])) {
        header("Location: login.php");
        exit();
    } else {
        echo 'Hello' . $_SESSION['userEmail'] . 'Welcome back!<br>';
    }

    if (isset($_POST['logoutBtn'])) {
        unset($_SESSION['isLogged']);
        header("Location: login.php");
        exit();
    }

    ?>

    <form method="POST">
        <button type="submit" name="logoutBtn">Logout</button>
    </form>
</body>

</html>