<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms Ex. 1</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="submit" name="submitBtn" value="Submit"><br>
        <br>
        <br>
    </form>
    <?php
    // check if button is clicked
    if (isset($_POST['submitBtn'])) {
        $errors = false;

        if (empty($_POST['email'])) {
            $errors = true;
        }
        if (empty($_POST['password'])) {
            $errors = true;
        }
        if (strpos($_POST['email'], "@")) {
            echo 'Valid email!';
        } else {
            echo "Invalid email!";
            $errors = true;
        }
        if ($errors === false) {
            echo "<p class=\"valid\">You successfully logged in!</p><style>.valid{color: green;}</style>";
        } else {
            echo "<p class=\"invalid\">Wrong login!</p><style>.invalid{color: red;}</style>";
        }
    }


    ?>
</body>

</html>