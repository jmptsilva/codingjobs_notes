<?php

require_once 'IAction.php';

class Robot implements IAction
{

    public $color;
    public $identifier;

    public function __construct($c, $i)
    {
        $this->identifier = $i;
        $this->color = $c;
    }

    public function work()
    {
        echo 'Bip boop, task done!';
    }
}
