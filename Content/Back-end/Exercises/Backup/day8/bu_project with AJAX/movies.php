<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies list</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/form.css">
</head>

<body>
    <?php
    // require_once 'nav.php';
    ?>

    <div id="form-div">
        <form method="post">
            <input type="text" name="search" placeholder="Movie title...">
        </form>
    </div>

    <div id="movies-list">
    </div>
    <script>
        fetch('get-movies.php')
            .then(res => res.text())
            .then(function(result) {
                document.getElementById('movies-list').innerHTML = result;
            })

        document.querySelector("form").addEventListener('input', function(event) {
            event.preventDefault();
            let form = this;

            fetch('search-movies.php', {
                    method: 'post',
                    body: new FormData(form)
                }).then(res => res.text())
                .then(function(result) {
                    document.getElementById('movies-list').innerHTML = result;
                })
        })
    </script>
</body>

</html>