<?php

require_once __DIR__ . '/products.php';

class Food extends Products
{
    public $type;
    public $calories;
    public $weight;

    public function __construct($name, $price, $category, $availability, $imgUrl, $type, $calories, $weight)
    {
        parent::__construct($name, $price, $category, $availability, $imgUrl);
        $this->type = $type; //dry or wet
        $this->calories = $calories; // in Kcal
        $this->weight = $weight; //in kg
    }
}
