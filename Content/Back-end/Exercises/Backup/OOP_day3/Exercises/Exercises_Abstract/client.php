<?php

require_once 'Dog.php';
require_once 'Cat.php';
require_once 'Human.php';
require_once 'Robot.php';

$dog = new Dog(4, 'Bobo', 'brown', 'male');
$cat = new Cat(4, 'Pawsy', 'white', 'female');
$girl = new Human('black', 'female', 'Carla');
$Gen1Bot = new Robot('Grey', 'i234d4');
$AIFriend = new Robot('White', 'i53r663');

$beings = [$dog, $cat, $girl];

$workers = [$girl, $Gen1Bot, $AIFriend];

foreach ($beings as $object) {
    $object->communicate();
    echo '<br>';
}

echo '<hr>';

foreach ($workers as $object) {
    $object->work();
    echo '<br>';
}


/* echo '<pre>';
var_dump($beings);
echo '</pre>';
 */