<?php

require_once '../private_html/vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('../private_html/templates');
$twig = new Twig_Environment($loader, array(
    'cache' => './',
));

$i = 0;

switch ($i) {
    case "0":
        echo $twig->render('index.html');
        break;
    case "1":
        echo $twig->render('maintenance.html');
        break;
    case "2":
        echo "BAKA!";
        break;
}
