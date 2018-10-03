<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 03/10/2018
 * Time: 23:59
 */

namespace App\CoreClass;

/**
 * Class User
 * @package App\CoreClass
 */
class User
{
    private $id;
    private $email;
    private $date_subscribe;
    private $date_last_connection;
    private $password;

    public function __construct($data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {

        foreach ($data as $key => $value)
        {
            $length = strlen($key);
            $string = '';
            for ($i=0; $i<$length; $i++) {
                if ($key[$i] == '_'){
                    $string .= ucfirst($key[$i+1]);
                    $i++;
                }else{
                    $string .= $key[$i];
                }
            }
            $key = $string;
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getDateSubscribe()
    {
        return $this->date_subscribe;
    }

    /**
     * @return mixed
     */
    public function getDateLastConnection()
    {
        return $this->date_last_connection;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $date_subscribe
     */
    public function setDateSubscribe($date_subscribe)
    {
        $this->date_subscribe = $date_subscribe;
    }


    /**
     * @param mixed $date_last_connection
     */
    public function setDateLastConnection($date_last_connection)
    {
        $this->date_last_connection = $date_last_connection;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

}