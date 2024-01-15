<?php

require_once __DIR__ . '/products.php';

class Toys extends Products
{
    public $size;
    public $material;
    public $color;
    public $weight;


    public function __construct($name, $price, $category, $availability, $imgUrl, $size, $material, $color, $weight)
    {
        parent::__construct($name, $price, $category, $availability, $imgUrl);
        $this->size = $size; //in cm
        $this->material = $material;
        $this->color = $color;
        $this->weight = $weight; //in kg
    }
}
