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
    public function WelcomeAction(){
        include 'views/welcome.php';
    }

    public function loginAction(){
        include 'views/login.php';
    }

    public function bestaireAction(){
        include 'views/game/bestiaire.php';
    }
}