<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 03/10/2018
 * Time: 00:23
 */

namespace App\Controller;


class HomeController
{

    public function index(){
        echo 'coucou';
    }

    public function indexPerso($id){
        echo "coucou $id";
    }
}