<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Ex. 1</title>
</head>

<body>
    <?php
    $userEmail = '';

    if (isset($_POST['submitBtn'])) {
        $errors = false;

        $userEmail = $_POST['userEmail'];

        // validations
        if (empty($_POST['userEmail'])) {
            $errors = true;
            echo "Email is mandatory!";
        }
        if (empty($_POST['password'])) {
            $errors = true;
            echo "Password is mandatory!";
        }

        if ($errors) {
            echo 'Try again, please!';
        } else {
            $_SESSION['userEmail'] = $_POST['userEmail'];
            $_SESSION['isLogged'] = true;
        }

        // var_dump($_SESSION);
    }

    ?>
    <form method="POST">
        <input type="text" name="userEmail" value="<?php echo $userEmail ?>">
        <br>
        <input type="password" name="password">
        <br>
        <button type="submit" name="submitBtn">Login</button>
    </form>
</body>

</html>