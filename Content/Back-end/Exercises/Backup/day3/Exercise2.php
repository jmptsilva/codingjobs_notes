<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions Ex. 2</title>
</head>

<body>
    <?php

    function htmlImages($src)
    {
        echo "<img src=\"$src\"/>";
    }

    htmlImages('https://upload.wikimedia.org/wikipedia/en/d/d6/Avatar_%282009_film%29_poster.jpg');

    ?>
</body>

</html>