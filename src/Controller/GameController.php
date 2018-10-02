<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 03/10/2018
 * Time: 00:23
 */

namespace App\Controller;


class GameController
{

    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['id_player'])){
            header('Location: /');
        }
    }

    public function chooseClassAction(){
        include 'views/game/choose-class.php';
    }

    public function levelUpAction(){
        include 'views/game/level-up.php';
    }

}