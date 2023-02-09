<?php

require_once 'Adventurer.php';

class Elf extends Adventurer
{
    public function attack($opponent)
    {
        if (count($this->inventory) !== 0) {
            $opponent->healthPoints -= $this->atkPoints + search_sword($this->inventory);
            echo 'Swwiiiftt!<br>';
            echo $opponent->healthPoints . 'HP remaining';
        } else {
            $opponent->healthPoints -= $this->atkPoints;
            echo 'ARgghhh<br>';
            echo $opponent->healthPoints . 'HP remaining';
        }
    }

    public function use_power()
    {
        if (!$this->used_power) {
            $this->defPoints += 3;
            echo 'May the light guide me!';
        } else {
            echo 'Already used your power!';
        }
        return $this->used_power = true;
    }
}
