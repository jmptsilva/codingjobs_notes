<?php

class Utility
{
    public static function add_log()
    {
        if (is_writable('Log.txt')) {
            $file_h = fopen('Log.txt', 'a');

            date_default_timezone_set("Europe/Luxembourg");

            $date = date("Y-m-d H\hi\ms\s");

            fwrite($file_h, "\nAccessing file - " . $date);

            fclose($file_h);

            echo "<span>Success!</span>";
        } else {
            echo 'Not able to write on the file.';
        }
    }
}
