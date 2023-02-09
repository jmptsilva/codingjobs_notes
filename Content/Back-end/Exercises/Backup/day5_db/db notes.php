<?php

// WORK WITH A DATABASE

// 1. Connect to database

$conn = mysqli_connect('localhost', 'jsilva', 'j0m4n3ls', 'book_store');

//true if connected, false if not
if ($conn) {
    echo 'Connected successfully!<br><br>';

    // 2. Prepare the query

    $query = "SELECT * FROM books";

    // 3. Ask DB to execute/run the query

    $result = mysqli_query($conn, $query);
    // I retrieved the results, but this is just an overview of the data

    // 4. Fetch the results as an associative array

    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach ($books as $book) {
        echo 'Title: ' . $book['title'] . '<br>';
        echo 'Price: ' . $book['price'] . ' €<hr>';
    }



    // 5. Close the connection

    mysqli_close($conn);

    /* echo '<pre>';
    var_dump($books);
    echo '</pre>'; */
} else {
    echo 'Problem connecting to the DB<br>';
}
