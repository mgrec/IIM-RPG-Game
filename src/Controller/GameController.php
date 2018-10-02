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
        $this->lvl = rand();
        if (!isset($_SESSION['id_player'])){
            header('Location: /');
        }
    }

    public function chooseClassAction(){
        $class = false;

        if ($class == true){
            header('Location: /');
        }
        include 'views/game/choose-class.php';
    }

    public function levelUpAction(){
        $lvl = $this->lvl;
        include 'views/game/level-up.php';
    }

}