<?php
session_start();

require_once 'database.php';
// Message placeholder
$msg = '';

// Handle form data
$title = '';
$poster = '';
$description = '';
$release_date = '';
$director_id = '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert new movie</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/form.css">
</head>

<body>
    <?php require_once 'nav.php'; // to get this navbar we could change the file to html and fetch it through ajax!
    ?>

    <h1>Insert new movie</h1>


    <p style="text-align: center;">Use the form to insert a new movie inside the DB</p>
    <p id="message"></p>
    <form method="POST">
        <div>
            <label for="title">Title : </label>
            <input type="text" name="title" placeholder="Title" id="title" value="">
        </div>

        <div>
            <label for="poster">Poster : </label>
            <input type="text" name="poster" placeholder="URL" id="poster" value="">
        </div>

        <div>
            <label for="release_date">Release date : </label>
            <input type="text" name="release_date" id="release_date" value="">
        </div>

        <div>
            <label for="director">Director :</label>
            <select name="director" id="director"></select>
        </div>

        <div>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Description..."></textarea>
        </div>

        <input type="submit" name="insertBtn" value="Insert" id="submitBtn">
    </form>
    <script>
        fetch('get-directors.php')
            .then(res => res.text())
            .then(function(result) {
                document.getElementById('director').innerHTML = result;
            })

        document.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault();
            let form = this;

            fetch('new-movie.php', {
                    method: 'post',
                    body: new FormData(form)
                })
                .then(res => res.text())
                .then(function(result) {
                    document.getElementById('message').innerHTML = result;
                    document.getElementById('title').value = "";
                    document.getElementById('poster').value = "";
                    document.getElementById('release_date').value = "";
                    document.getElementById('description').value = "";
                })
        })
    </script>
</body>

</html>