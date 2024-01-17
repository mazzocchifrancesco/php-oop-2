<?php

require_once __DIR__ . '/Products.php';

class Beds extends Products
{
    public $size;
    public $weight;
    use material_spec;



    public function __construct($name, $price, $category, $availability, $imgUrl, $size, $color, $material, $weight)
    {
        parent::__construct($name, $price, $category, $availability, $imgUrl);
        $this->size = $size; //in cm
        $this->color = $color;
        $this->weight = $weight; //in kg
        $this->material = $material;
    }
}
