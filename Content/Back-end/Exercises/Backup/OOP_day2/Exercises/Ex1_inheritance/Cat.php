<?php

require_once 'Animal.php';

class Cat extends Animal
{
    // methods
    public function meow()
    {
        echo "The cat goes 'Meow...'.";
    }
}
