<?php

require_once 'Animal.php';

class Cat extends Animal
{
    // methods
    public function communicate()
    {
        echo "The cat goes 'Meow...'.";
    }
}
