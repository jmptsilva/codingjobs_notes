<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cookie</title>
</head>

<body>
    <?php

    echo isset($_COOKIE['viewed']) ? 'You have visited the page' : 'You have not visited the page';
    echo 'Number of visits: ' . $_COOKIE['nbrVisits'];

    ?>
</body>

</html>