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

    private $lvl;

    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['player_id'])){
            header('Location: /');
        }
    }

    public function chooseClassAction(){

        $userModel = new UserModel();
        $user  = $userModel->get($_SESSION['player_id']);

        if ($_SERVER['REQUEST_METHOD'] == "POST"){

        }

        include 'views/game/choose-class.php';
    }

    public function levelUpAction(){
        include 'views/game/level-up.php';
    }

}