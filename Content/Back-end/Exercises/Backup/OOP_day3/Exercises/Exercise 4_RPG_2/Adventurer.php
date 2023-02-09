<?php

class Adventurer
{
    public $name;
    public $healthPoints;
    public $atkPoints;
    public $defPoints;
    public $warCry;
    protected $type;
    public $inventory; // inventory is an Array of Objects
    public $used_power = false;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->set_type($type);
        $this->healthPoints = 100;
        $this->atkPoints = 10;
        $this->defPoints = 5;
        $this->warCry = "Attaaaaaack!";
        if ($this->type == 'Orc')
            $this->warCry = "wwouogrouroulou mlll !!";

        $this->inventory = array();
    }

    public function set_type($type)
    {
        $availableTypes = ['Human', 'Orc', 'Elf'];
        if (in_array($type, $availableTypes))
            $this->type = $type;
        else
            echo "Wrong type.";
    }

    public function add_equipment($equip)
    {
        $this->inventory[] = $equip;
    }

    public function remove_equipment($equip)
    {
        foreach ($this->inventory as $key => $value) {
            if ($equip === $value)
                unset($this->inventory[$key]);
        }
    }

    public function remove_all_equipment()
    {
        unset($this->inventory);
    }

    public function display_equipment()
    {
        echo "Inventory list : <br>";
        // Loop throught the inventory list to display each equipement
        foreach ($this->inventory as $key => $equip) {
            echo '<hr>';
            echo $equip;
        }
    }
}
