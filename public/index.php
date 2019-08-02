<?php

require '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../views');
$twig = new \Twig\Environment($loader, [
    'cache' => '../tmp',
    'debug' => true,
]);

$twig->addExtension(new \Twig_Extension_Debug());

$navigation = [
    'Home' => '/index.php',
    'About' => '/index.php?page=about',
    'Menu' => '/index.php?page=menu',
    'Gallery' => '/index.php?page=gallery',
    'Reservations' => '/index.php?page=reservations',
    'Location' => '/index.php?page=gallery',
];

$menus = [
    [
        'Prime steack' => [
            [
                'name' => 'Filet',
                'ingredients' => '7oz, Center Cut10 oz, Double cut',
                'price' => 14.49,
            ],
            // to bo continued
        ],
        'Our burgers' => [],
        'Desserts' => [],
    ],
];

$socialMedia = [
    'facebook' => 'https://www.facebook.com/...',
    // To be continued
];

$address = 'W325 State Road 123 Mondovi, WI (Wisconsin) 98746-54321';
// Router
echo $twig->render('homepage.html', [
    'navigation'    => $navigation,
    'menus'         => $menus,
    'socialMedia'   => $socialMedia,
    'address'       => $address,
]);
