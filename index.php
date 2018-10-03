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

//# -- route controller page du site -- #//
// page
$router->get('/', "Page@welcomeAction");
$router->get('/bestiaire', "Page@bestaireAction");

// page inscription
$router->get('/subscribe', "Page@subscribeAction");
$router->post('/subscribe', "Page@subscribeAction");

// page connexion
$router->get('/login', "Page@loginAction");
$router->post('/login', "Page@loginAction");

// page account
$router->get('/account', "Page@accountAction");

// page deconnexion
$router->get('/logout', "Page@logoutAction");


//# -- route controller jeu -- #//

//choose class
$router->get('/choose-class', "Game@chooseClassAction");
$router->get('/choose-class', "Game@chooseClassAction");

// pass level
$router->get('/level-up', "Game@levelUpAction");

$router->run();