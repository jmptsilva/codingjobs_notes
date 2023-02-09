<?php

class CoffeeCup
{
    // properties
    private $brand;
    public $quantity;
    public $temperature;
    private $volume;

    // constructor
    public function __construct($brand, $volume, $temperature)
    {
        $this->set_brand($brand);
        $this->set_volume($volume);
        $this->quantity = $volume;
        $this->temperature = $temperature;
    }

    // setter for brand
    public function set_brand($newBrand)
    {
        if ($newBrand != 'Malongo' and $newBrand != 'Nescafé' and $newBrand != 'Lavazza')
            echo 'Choose a valid brand (Malongo, Lavazza or Nescafé)!';
        else
            $this->brand = $newBrand;
    }

    // setter for brand
    public function set_volume($newVolume)
    {
        $this->volume = $newVolume;
    }

    // getter for brand
    public function get_brand()
    {
        return $this->brand;
    }

    public function displayCoffee()
    {
        return "<br>Brand: $this->brand<br>
        Quantity: $this->quantity cl<br>
        Temperature: $this->temperature °C<br>";
    }

    public function coffee_left($consumed)
    {
        if (is_numeric($consumed)) {
            if ($consumed > $this->quantity) {
                echo 'Sorry, you don\'t have enough coffee!';
                $this->quantity = 0;
                return false;
            } else {
                $this->quantity -= $consumed;

                return 'Coffee remaining: ' . ($this->quantity) . ' cl';
            }
        } else {
            echo 'Not a valid number, please insert a number!';
            return false;
        }
    }

    public function coffee_refill()
    {
        $this->quantity = $this->volume;
    }

    public function coffee_reheat($heat)
    {
        if (is_numeric($heat)) {
            $this->temperature += $heat;
            return 'New coffee temperature: ' . ($this->temperature) . ' °C';
        } else {
            echo 'Not a valid number, please insert a number for the temperature!';
            return false;
        }
    }

    public function coffee_cool($cool)
    {
        if (is_numeric($cool)) {
            $this->temperature -= $cool;
            return 'New coffee temperature: ' . ($this->temperature) . ' °C';
        } else {
            echo 'Not a valid number, please insert a number for the temperature!';
            return false;
        }
    }
}
