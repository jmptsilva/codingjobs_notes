<?php

require_once 'User.php';
require_once 'AdminUser.php';
require_once 'RegularUser.php';

$product = [
    'name' => 'Tshirt',
    'price' => 20,
    'quantity' => 1
];

$admin1 = new AdminUser('Toto', 'toto@gmail.com', 'te5TFD43s');
$regular = new RegularUser('Zeze', 'zeze@outlook.com', 'zeZe1976');

echo 'User Admin:<br>';
$admin1->display_user();

echo '<br>';
echo 'User Regular:<br>';
$regular->display_user();

echo '<hr>';
$regular->add_to_cart($product);

$regular->display_cart();
