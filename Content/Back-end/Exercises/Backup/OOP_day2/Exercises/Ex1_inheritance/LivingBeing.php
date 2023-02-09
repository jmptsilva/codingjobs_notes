<?php

class LivingBeing
{
    // properties
    public $color;
    public $gender;
    public $name;

    // construct
    public function __construct($c, $g, $n)
    {
        $this->color = $c;
        $this->gender = $g;
        $this->name = $n;
    }
}
