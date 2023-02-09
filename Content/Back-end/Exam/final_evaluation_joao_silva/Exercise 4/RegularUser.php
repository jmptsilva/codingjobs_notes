<?php

class RegularUser extends User
{
    // properties
    public $cart = array();

    //construct
    public function __construct($name, $email, $password)
    {
        parent::__construct($name, $email, $password);
    }

    //methods
    public function add_to_cart($product)
    {
        if ($this->cart[$product]['quantity'] !== 0) {
            $product['quantity'] += 1;
        } else {
            $this->cart[] = $product;
        }
    }

    public function remove_from_cart($product)
    {
        foreach ($this->cart as $key => $value) {
            if ($product === $value)
                unset($this->cart[$key]);
        }
    }

    public function display_cart()
    {
        echo "Cart: <br>";

        foreach ($this->cart as $key => $item) {
            echo '<br>';
            echo $item['name'] . '<br>';
            echo $item['price'] . '<br>';
            echo $item['quantity'] . '<br>';
        }

        echo '<hr>';
    }
}
