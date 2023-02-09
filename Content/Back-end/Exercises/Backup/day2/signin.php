<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin Ex.</title>
</head>

<body>
    <?php


    if (isset($_POST['submitBtn'])) {
        $errors = false;

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];

        // validations
        if (empty($_POST['firstname'])) {
            $errors = true;
            echo "First name is mandatory!";
        }
        if (empty($_POST['lastname'])) {
            $errors = true;
            echo "Last name is mandatory!";
        }
        if (empty($_POST['email']) || strlen($_POST['email']) > 50 || strlen($_POST['email']) < 8) {
            $errors = true;
            echo "Invalid e-mail address. It must have between 8 and 50 characters.";
        }
        if (empty($_POST['password']) || strlen($_POST['password']) < 8 || $_POST['password'] !== $_POST['confirmPassword']) {
            $errors = true;
            echo "Invalid password! It must have more than 8 characters!";
        }
        if ($_POST['password'] !== $_POST['confirmPassword']) {
            $errors = true;
            echo "Invalid confirmation. Please try again.";
        }

        if ($errors === false) {
            echo "Summary: <br>";
            echo "First name: $firstname<br>";
            echo "Last name: $lastname<br>";
            echo "E-mail: $email<br>";
            echo "Password ok!<br><br>";
            if (isset($_POST['subscribe'])) {
                echo "Thank you for subscribing<br><br>";
            }
        };
        echo "Signin successful!<br><br>";
    }

    ?>
    <form method="POST">
        <input class="input" type="text" name="firstname" placeholder="First name" value="<?php echo $firstname ?>"><br>
        <input class="input" type="text" name="lastname" placeholder="Last name" value="<?php echo $lastname ?>"><br>
        <input class="input" type="text" name="email" placeholder="Email address" value="<?php echo $email ?>"><br>
        <input class="input" type="password" name="password" placeholder="Password"><br>
        <input class="input" type="password" name="confirmPassword" placeholder="Confirm password"><br><br>
        <input type="checkbox" name="subscribe" id="checkbox">
        <label for="checkbox">Subscribe our newsletter!</label><br><br>
        <input type="submit" name="submitBtn" value="Submit"><br>
        <br>
        <br>
    </form>
    <style>
        .input {
            margin-top: 5px;
        }
    </style>

</body>

</html>