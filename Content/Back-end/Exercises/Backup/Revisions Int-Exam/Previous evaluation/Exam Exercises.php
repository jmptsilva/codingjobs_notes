<?php

// Exercise 1 - Query

"SELECT *
FROM instruments
WHERE type = 'guitar' && price < 100";

"SELECT *
FROM instruments_in_band
INNER JOIN bands ON bands.id = instruments_in_band.band_id
INNER JOIN instruments ON instruments.id = instruments_in_band.instrument_id
WHERE instruments_in_band.band_id = 5";

// Exercise 2 - Capital

$countries = array(
    "France" => ["capital" => "Paris", "population" => 65687541],
    "Italy" => ["capital" => "Rome", "population" => 9879055],
    "Luxembourg" => ["capital" => "Luxembourg", "population" => 300],
    "Belgium" => ["capital" => "Brussels", "population" => 9849849],
    "Denmark" => ["capital" => "Copenhagen", "population" => 8789797],
    "Finland" => ["capital" => "Helsinki", "population" => 2989897],
    "Slovakia" => ["capital" => "Bratislava", "population" => 3879879],
    "Slovenia" => ["capital" => "Ljubljana", "population" => 64988],
    "Germany" => ["capital" => "Berlin", "population" => 3965987],
    "Greece" => ["capital" => "Athens", "population" => 4897987],
    "Ireland" => ["capital" => "Dublin", "population" => 1987497],
    "Netherlands" => ["capital" => "Amsterdam", "population" => 6897987],
    "Portugal" => ["capital" => "Lisbon", "population" => 7997978],
    "Spain" => ["capital" => "Madrid", "population" => 13277854],
    "Sweden" => ["capital" => "Stockholm", "population" => 897982],
);

ksort($countries);

foreach ($countries as $key => $value) {
    echo 'The capital of ' . $key . ' is ' . $value['capital'] . '. Number of inhbitants: ' . $value['population'] . '.<hr>';
}

echo max(array_column($countries, 'population')) . '<br>';


// Exercise 3 - Money converter

function currencyConv($price, $currency)
{
    $convRate = 138.20;

    if (gettype($price) == 'double' or gettype($price) == 'integer') {
        if ($currency === 'JPY' or $currency === 'EUR') {
            if ($currency == "JPY") {
                return $price / $convRate . ' €';
            } else {
                return $price * $convRate . ' JPY';
            }
        } else {
            return 'Invalid currency. Please, insert only EUR or JPY in the currency parameter!';
        }
    } else {
        return "Please, insert a valid price!";
    }
}

/* echo gettype(8474.2); */

echo currencyConv(8474.2, 'EUR');

// Exercise 4 - Rent-a-car

// db created is myphpadmin! file in
