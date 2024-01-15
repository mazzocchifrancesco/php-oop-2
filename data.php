<?php

require_once __DIR__ . '/Models/food.php';
require_once __DIR__ . '/Models/cuccia.php';
require_once __DIR__ . '/Models/toys.php';



$prodotti = [
    new Food('crocchette premium', 50, 'cane', true, 'ciao.jpg', 'dry', '550', '4',),
    new Cuccia('cuccia kingsize', 120, 'cat', false, 'img.png', 50, 'red', 1.5),
    new Toys('sonaglio', 5, 'dog', true, 'img.svg', 15, 'plastic', 'green', 0.3)

];
