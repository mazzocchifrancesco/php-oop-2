<?php

class Client
{
    public $name;
    public $surname;
    public $age;
    public $creditCard;
    public $address;

    public function __construct($name, $surname, $age, $creditCard, $address)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->creditCard = $creditCard;
        $this->address = $address;
    }

    public function getTotalToPay(array $cart)
    {
        return array_sum($cart);
    }
}
