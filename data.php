<?php

require_once __DIR__ . '/Models/food.php';
require_once __DIR__ . '/Models/cuccia.php';
require_once __DIR__ . '/Models/toys.php';
require_once __DIR__ . '/Models/category.php';


$cane = new Category('Cane', 'prodotti per il tuo cane');
$gatto = new Category('Gatto', 'prodotti per il tuo gatto');


$prodotti = [
    new Food(
        'crocchette premium',
        12.5,
        $cane,
        true,
        'https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/kg/rocco/mealtime/crocchette/per/cani/7/800/rocco_mealtime_lamb_1kg_1000x1000_7.jpg',
        'dry',
        550,
        '4',
    ),
    new Cuccia(
        'cuccia kingsize',
        120,
        $gatto,
        false,
        'https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/251962edb7de5760e0b55659df48bbfe.jpg?imageView2/2/w/800/q/70',
        50,
        'arancione',
        1.5
    ),
    new Toys(
        'sonaglio',
        5,
        $cane,
        true,
        'https://qz-petshop.com/11245-large_default/camon-gioco-per-cani-osso-in-tpr-con-sonaglio-vari-colori.jpg',
        15,
        'plastica',
        'blu',
        0.3
    ),
    new Food(
        'crocchette premium',
        12.5,
        $cane,
        true,
        'https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/kg/rocco/mealtime/crocchette/per/cani/7/800/rocco_mealtime_lamb_1kg_1000x1000_7.jpg',
        'dry',
        550,
        '4',
    ),
    new Cuccia(
        'cuccia kingsize',
        120,
        $gatto,
        false,
        'https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/251962edb7de5760e0b55659df48bbfe.jpg?imageView2/2/w/800/q/70',
        50,
        'arancione',
        1.5
    ),
    new Toys(
        'sonaglio',
        5,
        $cane,
        true,
        'https://qz-petshop.com/11245-large_default/camon-gioco-per-cani-osso-in-tpr-con-sonaglio-vari-colori.jpg',
        15,
        'plastica',
        'blu',
        0.3
    )
];
