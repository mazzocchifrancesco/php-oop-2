<?php

require_once __DIR__ . '/products.php';

class Cuccia extends Products
{
    public $size;
    public $color;
    public $weight;


    public function __construct($name, $price, $category, $availability, $imgUrl, $size, $color, $weight)
    {
        parent::__construct($name, $price, $category, $availability, $imgUrl);
        $this->size = $size; //in cm
        $this->color = $color;
        $this->weight = $weight; //in kg
    }
}
