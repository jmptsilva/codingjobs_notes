<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms Ex. 2</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="position" placeholder="Which number?"><br><br>
        <input type="submit" name="submitBtn" value="Submit"><br>
        <br>
        <br>
    </form>
    <?php

    $a = 1;
    $multOf2 = [];
    $x = $_POST['position'];

    while ($a < 11) {
        $multOf2[$a] = $a * $x;
        $a++;
    };

    if (isset($_POST['submitBtn'])) {
        $errors = false;

        if (empty($_POST['position'])) {
            $errors = true;
        }

        if ($errors === false) {
            echo '<table class="mult-table">';
            foreach ($multOf2 as $key => $value) {
                echo "<tr><td>$key x $x = $value</td></tr>";
            }
            echo '</table><style>.mult-table {background-color: lightgrey; border: 1px solid black;}</style>';
        } else {
            echo "Number not available!";
        }
    }


    ?>
</body>

</html>