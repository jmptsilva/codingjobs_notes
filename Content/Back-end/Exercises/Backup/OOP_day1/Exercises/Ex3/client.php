<?php

require_once 'CoffeeCup.php';

// Create the objects
$colombianCoffee = new CoffeeCup('Malongo', 50, 60);

// Part 1
echo 'Part 1';
echo $colombianCoffee->displayCoffee();
echo '<hr>';

// Part 2
echo 'Part 2<br>';
echo $colombianCoffee->coffee_left(10);
echo '<hr>';

// Part 4
echo 'Part 4<br>';
echo $colombianCoffee->coffee_reheat(15);
echo '<br>';
echo $colombianCoffee->coffee_cool(13);
echo '<hr>';

// Part 6
echo 'Part 6<br>';

while ($colombianCoffee->quantity > 0) {
    $quantityToSip = rand(1, 6);
    $colombianCoffee->coffee_left($quantityToSip);
    $colombianCoffee->coffee_cool(1.5);
    echo $colombianCoffee->displayCoffee();
}
