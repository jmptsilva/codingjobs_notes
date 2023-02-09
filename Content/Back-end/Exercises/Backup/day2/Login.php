<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms Ex. 4</title>
</head>

<body>
    <?php

    $users = [
        0 => [
            'email' => 'simon@gmail.fr',
            'password' => 1234
        ],
        1 => [
            'email' => 'alfonso@gmail.com',
            'password' => 6549
        ]
    ];

    // check if button is clicked
    if (isset($_POST['loginBtn'])) {
        $errors = false;


        foreach ($users as $user) {
            if ($user['email'] === $_POST['email']) {
                $errors = false;
            }
        }

        foreach ($users as $user) {
            if ($user['password'] === $_POST['password']) {
                $errors = false;
            }
        }

        if ($errors === false) {
            echo "<p class=\"valid\">You successfully logged in!</p><style>.valid{color: green;}</style>";
        } else {
            echo "<p class=\"invalid\">Wrong login combination! Check your email/password and try again.</p><style>.invalid{color: red;}</style>";
        }
    }
    ?>
    <form method="POST">
        <input type="text" name="email" placeholder="Email"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="submit" name="loginBtn" value="Login"><br>
        <br>
        <br>
    </form>
</body>

</html>