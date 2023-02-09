<?php

$file_h = fopen('last_access.log', 'a');

date_default_timezone_set("Europe/Luxembourg");

$date = date("Y-m-d H\hi\ms\s");

fwrite($file_h, "\nAccess file : " . $date);

fclose($file_h);

echo $date;
