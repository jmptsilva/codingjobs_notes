<?php

// WORK WITH A DATABASE

// 1. Connect to database

$conn = mysqli_connect('localhost', 'jsilva', 'j0m4n3ls', 'book_store');

//true if connected, false if not
if ($conn) {
    // echo 'Connected successfully!<br><br>';

    // 2. Prepare the query

    $query = "INSERT INTO books(title, price, author_id, publication_date, sales)
    VALUES('The Hobbit', 12, 3, '1954-01-01', 3765312)";

    // 3. Ask DB to execute/run the query

    $result = mysqli_query($conn, $query);

    // 4. No need to fetch, so we check if it is ok

    if ($result) {
        echo 'Successfully inserted!<br>';
    } else {
        echo 'Error: problem inserting in the db!<br>';
    }

    // 5. Close the connection

    mysqli_close($conn);
} else {
    echo 'Problem connecting to the DB<br>';
}
