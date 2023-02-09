<?php

require_once 'Equipment.php';
require_once 'Adventurer.php';
require_once 'Functions.php';
require_once 'Elf.php';
require_once 'Orc.php';
require_once 'Human.php';

$elf = new Elf('Legolas', 'Elf');
// echo '<pre>';
// var_dump($elf);
// echo '</pre>';

$orc = new Orc('John', 'Orc');
// echo '<pre>';
// var_dump($orc);
// echo '</pre>';


$sword = new Equipment("Death Sword", "Sword", 10, 0, 0); // 10 atk bonus, 0 def bonus, 0 life bonus;
$shield = new Equipment("Weak Shield", "Shield", 0, 10, 0);
// echo '<pre>';
// var_dump($sword);
// echo '</pre>';

$elf->add_equipment($sword);
$elf->add_equipment($sword);
$elf->add_equipment($sword);
$elf->add_equipment($shield);
// $elf->remove_equipment($sword);

/* $elf->display_equipment(); */

/* if (search_equip($elf->inventory, 'type', 'Shield')) {
    echo '<br>YES, HE\'S READY TO FIGHT!';
} else {
    echo '<br>He died in misery.';
} */

/* if (count($elf->inventory) === 0) {
    echo 'I\'m scared!';
} else {
    echo 'Let\'s gooo!';
} */

echo 'Round 1<br>';
$orc->attack($elf);
echo '<hr>';

echo 'Round 2<br>';
$elf->attack($orc);
echo '<hr>';

echo 'Round 3<br>';
$orc->attack($elf);
echo '<hr>';

echo 'Round 4<br>';
$orc->use_power();
echo '<hr>';

echo 'Round 5<br>';
$elf->attack($orc);
echo '<hr>';

echo 'Round 6<br>';
$orc->use_power();
echo '<hr>';

echo 'Round 7<br>';
$elf->use_power();
echo '<hr>';

echo 'Round 8<br>';
$elf->use_power();
echo '<hr>';

/* echo '<pre>';
var_dump($elf);
echo '</pre>';
 */