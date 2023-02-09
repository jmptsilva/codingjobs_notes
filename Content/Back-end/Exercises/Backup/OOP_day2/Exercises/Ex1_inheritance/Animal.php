<?php

require_once 'LivingBeing.php';

class Animal extends LivingBeing
{
    // properties
    public $nbLegs;

    // construct
    public function __construct($l, $n, $c, $g)
    {
        $this->nbLegs = $l;
        parent::__construct($n, $c, $g);
    }
}
