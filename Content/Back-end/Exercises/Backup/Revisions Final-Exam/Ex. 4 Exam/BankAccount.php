<?php

class BankAccount
{
    private $account_nb;
    private $balance;


    public function __construct($account_nb, $balance)
    {
        $this->set_accountNb($account_nb);
        $this->set_balance($balance);
    }

    public function set_balance($newBalance)
    {
        $this->balance = $newBalance;
    }

    public function get_balance()
    {
        return $this->balance;
    }

    public function set_accountNb($newAccountNb)
    {
        if (strlen($newAccountNb) > 8) {
            echo 'Account Id needs to have 8 or less characters';
        } else {
            $this->account_nb = $newAccountNb;
        }
    }

    public function get_accountNb()
    {
        return $this->account_nb;
    }

    public function withdraw($amount)
    {
        if ($this->get_balance > $amount) {
            $this->get_balance -= $amount;
        } else {
            echo "You don't have enough funds to make this withdraw.";
        }
    }
}
