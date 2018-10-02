<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 03/10/2018
 * Time: 00:53
 */

namespace App\Controller;


class PageController
{

    public function __construct()
    {
        session_start();
    }

    public function WelcomeAction(){
        $id_player = $_SESSION['id_player'];
        include 'views/welcome.php';
    }

    public function loginAction(){
        include 'views/login.php';
    }

    public function logoutAction(){
        unset($_SESSION['id_player']);
        session_unset();
        session_destroy();
        header('Location: /');
    }

    public function bestaireAction(){
        include 'views/game/bestiaire.php';
    }
}