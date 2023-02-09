<?php

class Equipment
{
    //properties
    public $name;
    public $defChange;
    public $atkChange;

    //constructer
    public function __construct($equipName, $defChange, $atkChange)
    {
        $this->name = $equipName;
        $this->defChange = $defChange;
        $this->atkChange = $atkChange;
    }

    // display
    public function display_equip()
    {
        echo $this->name . '<br>';
        echo $this->defChange . '<br>';
        echo $this->atkChange . '<br>';
    }
}
