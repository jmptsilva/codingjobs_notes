<?php

require_once 'Animal.php';

class Dog extends Animal
{
    // methods
    public function bark()
    {
        echo "The dog says 'Woof!'.";
    }
}
