<?php

require_once 'Adventurer.php';
require_once 'Functions.php';

class Orc extends Adventurer
{
    public function attack($opponent)
    {
        if ($opponent->type === 'Elf' and !search_equip($opponent->inventory, 'type', 'Shield')) {
            $opponent->healthPoints -= 50;
            echo 'WRRRRONFFFT!<br>';
            echo $opponent->healthPoints . 'HP remaining';
        } else {
            $opponent->healthPoints -= $this->atkPoints;
            echo 'Sfronnnnk!<br>';
            echo $opponent->healthPoints . 'HP remaining';
        }
    }

    public function use_power()
    {
        if (!$this->used_power) {
            $this->defPoints += 20;
            $this->atkPoints -= 10;
            echo 'WRRRROOONNNGGLHHLH!';
        } else {
            echo 'Already used your power!';
        }
        return $this->used_power = true;
    }
}
