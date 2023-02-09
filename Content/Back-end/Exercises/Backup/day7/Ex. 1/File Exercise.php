<?php

if (file_exists('message.txt')) {

    $file_h = fopen('message.txt', 'r');

    while (!feof($file_h)) {
        $line = fgets($file_h);
        echo "<p>$line</p><hr>";
    }

    fclose($file_h);
} else {
    echo "File not found!";
}
