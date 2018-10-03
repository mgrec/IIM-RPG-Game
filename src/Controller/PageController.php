<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 03/10/2018
 * Time: 00:53
 */

namespace App\Controller;

use App\Model\UserModel;

class PageController
{

    public function __construct()
    {
        session_start();
    }

    public function WelcomeAction(){

        include 'views/welcome.php';
    }

    public function loginAction(){

        if (isset($_SESSION['player_id'])){
            header('Location: /');
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $userModel = new UserModel();
            $user = $userModel->login($_POST['email'], $_POST['password']);
            if ($user != null){
                $_SESSION['player_id'] = $user['id'];
                header('Location: /account');
            }else{
                die("pas de compte");
            }
        }

        include 'views/login.php';
    }

    public function subscribeAction(){

        if (isset($_SESSION['player_id'])){
            header('Location: /');
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $userModel = new UserModel();
            $user = $userModel->subscribe($_POST['email'], $_POST['password']);
            if ($user == true){
                header('Location: /login');
            }else{
                die("error inscription");
            }
        }

        include 'views/subscribe.php';
    }

    public function logoutAction(){
        unset($_SESSION['player_id']);
        session_unset();
        session_destroy();
        header('Location: /');
    }

    public function accountAction(){

        if (!isset($_SESSION['player_id'])){
            header('Location: /');
        }

        $userModel = new UserModel();
        $user  = $userModel->get($_SESSION['player_id']);
        include 'views/account.php';
    }

    public function bestaireAction(){
        include 'views/game/bestiaire.php';
    }
}