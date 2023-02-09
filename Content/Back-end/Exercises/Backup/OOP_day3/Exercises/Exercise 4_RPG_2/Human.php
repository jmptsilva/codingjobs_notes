<?php

require_once 'Adventurer.php';

class Human
{
    public function attack($opponent)
    {
        if (!search_weapon($this->inventory)) {
            $opponent->healthPoints -= $this->atkPoints + 3;
            echo 'Take this!<br>';
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
            $this->healthPoints += 20;
            echo 'For valor!';
        } else {
            echo 'Already used your power!';
        }
        return $this->used_power = true;
    }
}
