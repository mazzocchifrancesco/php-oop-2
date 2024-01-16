<?php

require_once __DIR__ . '/Client.php';

class RegisteredClient extends Client
{

    public $client_id;
    public $client_psw;

    public function __construct($name, $surname, $age, $creditCard, $address, $client_id, $client_psw)
    {

        parent::__construct($name, $surname, $age, $creditCard, $address);
        $this->client_id = $client_id;
        $this->client_psw = $client_psw;
    }

    public function getTotalToPay(array $cart)
    {
        $tot = array_sum($cart);
        return $tot - ($tot * 0.2);
    }
}
