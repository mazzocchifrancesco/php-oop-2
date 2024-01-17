<?php

class Client
{
    public $name;
    public $surname;
    public $age;
    public $creditCard;
    public $address;
    public $registered;
    public $client_id;
    public $client_psw;


    public function __construct($name, $surname, $age, $creditCard, $address, $registered, $client_id, $client_psw)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->creditCard = $creditCard;
        $this->address = $address;
        $this->registered = $registered;
        $this->client_id = $client_id;
        $this->client_psw = $client_psw;
    }

    public function getTotalToPay(array $cart)
    {
        $tot = array_sum($cart);
        if ($this->registered) {
            return $tot - ($tot * 0.2);
        }
        return $tot;
    }
}
