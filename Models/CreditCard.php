<?php

class CreditCard
{
    public $number;
    public $cvv;
    public $expDate;

    // TODO data in formato data
    // TODO lunghezza input
    public function __construct(int $number, int $cvv, $expDate)
    {
        $timestamp = strtotime($expDate);
        $todayDate = date("Y/m/d");
        $todayTimestamp = strtotime($todayDate);

        if ($timestamp >= $todayTimestamp) {

            $this->number = $number;
            $this->cvv = $cvv;
            $this->expDate = $expDate;
        } else {
            throw new Exception('+++ expired Credit Card +++');
        }
    }
}
