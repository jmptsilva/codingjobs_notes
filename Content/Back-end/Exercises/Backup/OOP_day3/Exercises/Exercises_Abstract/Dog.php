<?php

require_once 'Animal.php';

class Dog extends Animal
{
    // methods
    public function communicate()
    {
        echo "The dog says 'Woof!'.";
    }
}
