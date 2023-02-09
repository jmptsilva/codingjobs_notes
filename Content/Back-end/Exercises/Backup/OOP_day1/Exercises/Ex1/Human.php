<?php

class Human
{
    //Properties
    public $name;
    public $haircolor;
    public $gender;
    public $height;

    //Constructor
    public function __construct($n, $hc, $g, $ht)
    {
        $this->name = $n;
        $this->hairColor = $hc;
        $this->gender = $g;
        $this->height = $ht;
    }

    // to display
    public function __toString()
    {
        return "<br>Name: $this->name<br>
        Haircolor: $this->hairColor<br>
        Gender: $this->gender<br>
        Height: $this->height m<br>";
    }
}
