<?php

require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Beds.php';
require_once __DIR__ . '/Models/Toys.php';
require_once __DIR__ . '/Models/Category.php';
require_once __DIR__ . '/Models/Client.php';



$dog = new Category('Dog', 'prodotti per il tuo cane');
$cat = new Category('Cat', 'prodotti per il tuo gatto');


$prodotti = [
    new Food(
        'crocchette premium',
        12.5,
        $dog,
        true,
        'https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/kg/rocco/mealtime/crocchette/per/cani/7/800/rocco_mealtime_lamb_1kg_1000x1000_7.jpg',
        'dry',
        550,
        '4',
    ),
    new Beds(
        'cuccia kingsize',
        120,
        $cat,
        false,
        'https://img.kwcdn.com/product/Fancyalgo/VirtualModelMatting/251962edb7de5760e0b55659df48bbfe.jpg?imageView2/2/w/800/q/70',
        50,
        'arancione',
        'poliestere',
        1.5
    ),
    new Toys(
        'sonaglio',
        5,
        $dog,
        true,
        'https://qz-petshop.com/11245-large_default/camon-gioco-per-cani-osso-in-tpr-con-sonaglio-vari-colori.jpg',
        15,
        'plastica',
        'blu',
        0.3
    ),
    new Food(
        'Feline Gourmet',
        4.5,
        $cat,
        false,
        'https://www.petwarehouse.ph/6551-big_default/pet-plus-feline-gourmet-sardines-chicken-prawn-400g-cat-wet-food.jpg',
        'wet',
        842,
        '0.5',
    ),
    new Beds(
        'cuccia princess',
        60,
        $cat,
        true,
        'https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/letto/princess/5/400/58202_PLA_Kuschelbett_Princess_FG_DSC3032_5.jpg',
        25,
        'rosa',
        'poliestere',
        1
    ),
    new Toys(
        'palla da tennis',
        3,
        $dog,
        true,
        'https://arcaplanet.vtexassets.com/arquivos/ids/222727/trixie-cane-palla-tennis.jpg?v=637454724966470000',
        15,
        'poliestere',
        'giallo-arancio',
        0.5
    )
];

$clients = [
    new Client(
        'francesco',
        'guccini',
        83,
        54565455454,
        'Via Paolo Fabbri 43',
        true,
        'guccio40',
        'avvelenato123+'
    )
];
$cart = [5, 6, 7, 8, 9, 10];
