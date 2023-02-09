<?php

require_once 'Character.php';
require_once 'Equipment.php';

// Character creations

$orcChar = new Character('Ozzpy', 120, 15, 12, 'Whhaaarrrrrrrrrg!', 'Orc');

// echo $orcChar->displayChar();


// Equipment creations

$sword = new Equipment('Blade', 1, 3);
$mace = new Equipment('Mace of Disarray', 0, 5);
$dagger = new Equipment('Sharpy', 0, 2);
$shield = new Equipment('Round shield', 5, 0);
$bracers = new Equipment('Leather bracers', 3, 0);
$boots = new Equipment('Combat boots', 2, 0);
$pendant = new Equipment('Star of Est', 2, 2);

// Equipment changes

$orcChar->set_equip($sword);
$orcChar->set_equip($dagger);

/* echo '<pre>';
var_dump($orcChar);
echo '</pre>'; */

$orcChar->displayCharEquip();
