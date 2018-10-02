<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 29/09/2018
 * Time: 17:14
 */
require_once "vendor/autoload.php";

// mode debug if local
if ($_SERVER["HTTP_HOST"] == "iim-php-rpg-game.local:8888"){
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
}

$router = new App\Router\Router($_GET["url"]);

// route closure
$router->get('/', function (){ echo "accueil";});
$router->get('/users', function (){ echo "page des users";});
$router->get('/user/:id', function ($id){ echo "page de l'user $id";});
$router->get('/combat/:id-:idmonster', function ($id, $idmonster){ echo "page de combat de l'user $id contre le monstre $idmonster";});

// route controller
$router->get('/controllertest', "Home@index");
$router->get('/controllertest/:id', "Home@indexPerso");

$router->run();