<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 03/10/2018
 * Time: 21:44
 */

namespace App\Model;
use App\CoreClass\User as UserClass;
use App\CoreClass\User;

class UserModel
{

    private $pdo;

    public function __construct()
    {
        $dhp = 'mysql:dbname=IIM_Rpg_game;host=localhost;port=8889';
        $user = 'root';
        $password = 'root';
        try {
            $this->pdo = new \PDO($dhp, $user, $password);
        } catch (\PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
    }

    /*** CRUD ***/

    public function get($id)
    {
        $req = $this->pdo->prepare('
          SELECT id, email, date_subscribe, date_last_connection
          FROM users
          WHERE id =:id'
        );
        $req->bindParam(':id', $id, \PDO::PARAM_INT);
        $req->execute();
        $user = $req->fetch(\PDO::FETCH_ASSOC);

        return new User($user);
    }

    /*** GAME FUNCTION ***/


    public function login($email, $password) {

        $req = $this->pdo->prepare('
          SELECT id
          FROM users
          WHERE email = :email 
          AND password = :password'
        );
        $req->bindParam(':email', $email, \PDO::PARAM_STR);
        $req->bindParam(':password', $password, \PDO::PARAM_STR);
        $req->execute();
        $user = $req->fetch();

        if (isset($user) && $user != null){
            $date_last_connection = date('Y-m-d H:i:s');
            $req = $this->pdo->prepare("UPDATE users SET date_last_connection=:date_last_connection WHERE id=:id");
            $req->bindParam(':date_last_connection', $date_last_connection);
            $req->bindParam(':id', $user['id'], \PDO::PARAM_INT);
            $req->execute();
        }

        return $user;
    }

    public function subscribe($email, $password) {
        $date_subscribe = date('Y-m-d H:i:s');
        $req = $this->pdo->prepare("INSERT INTO users (email, password, date_subscribe) VALUES (:email, :password, :date_subscribe)");
        $req->bindParam(':email', $email, \PDO::PARAM_STR);
        $req->bindParam(':password', $password, \PDO::PARAM_STR);
        $req->bindParam(':date_subscribe', $date_subscribe);
        $req->execute();

        return true;
    }

}