<?php

class Products
{
    public $name;
    public $price;
    public $category;
    public $availability;
    public $imgUrl;

    public function __construct($name, $price, Category $category, $availability, $imgUrl)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->availability = $availability;
        $this->imgUrl = $imgUrl;
    }
}
