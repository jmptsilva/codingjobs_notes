<?php

class Character
{
    // properties
    public $name;
    private $hp;
    private $atkpwr;
    private $def;
    private $warcry;
    private $race;
    public $equipment = array();

    //construct
    public function __construct($name, $hp = 100, $atkpwr = 10, $def = 5, $warcry = 'Ataack!', $race)
    {
        $this->name = $name;
        $this->set_hp($hp);
        $this->set_atkpwr($atkpwr);
        $this->set_def($def);
        $this->set_warcry($warcry);
        $this->set_race($race);
    }

    //setters
    public function set_hp($hp)
    {
        $this->hp = $hp;
    }
    public function set_atkpwr($atkpwr)
    {
        $this->atkpwr = $atkpwr;
    }
    public function set_def($def)
    {
        $this->def = $def;
    }

    public function set_race($race)
    {
        if ($race != 'Orc' and $race != 'Elf' and $race != 'Human') {
            echo "Please choose a valid race: Human, Orc or Elf!";
        } else {
            $this->race = $race;
        }
    }
    public function set_warcry($warcry)
    {
        if ($this->race = 'Orc') {
            $this->warcry = "wwouogrouroulou mlll !!";
        } else {
            $this->warcry = $warcry;
        }
    }
    public function set_equip($equipPiece)
    {
        $this->equipment[] = $equipPiece;
    }

    public function remove_equip()
    {
        $this->equipment[] = null;
    }

    //getters
    public function get_name()
    {
        return $this->name;
    }
    public function get_hp()
    {
        return $this->hp;
    }
    public function get_atkpwr()
    {
        return $this->atkpwr;
    }
    public function get_def()
    {
        return $this->def;
    }
    public function get_warcry()
    {
        return $this->warcry;
    }
    public function get_race()
    {
        return $this->race;
    }

    //display
    public function displayChar()
    {
        return "Name: $this->name<br>
        HP: $this->hp<br>
        Attack: $this->atkpwr<br>
        Defense: $this->def<br>
        Warcry: $this->warcry<br>
        Race: $this->race<br>";
    }

    public function displayCharEquip()
    {
        echo $this->name . ' (' . $this->race . ')<br>';
        echo '<br>Equipment:<br>';

        foreach ($this->equipment as $slot => $piece) {
            // echo $slot;
            echo $piece->name . ' - ' . $piece->defChange . '/' . $piece->atkChange . '<br>';
        }
    }
}
