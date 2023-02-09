<?php

class Robot
{
    // properties
    public $color;
    public $identifier;

    // construct
    public function __construct($c, $i)
    {
        $this->identifier = $i;
        $this->color = $c;
    }

    // methods
    public function work()
    {
        echo 'Bip boop, task done!';
    }
}
