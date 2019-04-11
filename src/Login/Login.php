<?php

namespace Crud\Login;
use PDO;
class Login
{
    /*database propertice */
    public $host = "localhost";
    public $username = "root";
    public $pass = "";
    public $dbname = "crud";
    /*this is the end of */

    /*starting of login propertice*/
    private $l_username;
    private $l_password;
    private $l_email;
    private $l_firstname;
    private $l_lastname;
    public function __construct()
    {
        session_start();
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->pass);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "yse";

        } catch (PDOException $exception) {
            echo "connection error" . $exception->getMessage();
        }
    }
    public function login($email,$pass){
       //$sql="SELECT `id`, `email`, `pass` FROM `admin` WHERE `email`='$email' AND`pass`='$pass'";
       $sta=$this->conn->prepare("SELECT `id`, `email`, `pass` FROM `admin` WHERE `email`='$email' AND`pass`='$pass'");
       $sta->execute();
        $result = $sta->setFetchMode(PDO::FETCH_ASSOC);




    }
//    /*this is the end login mehtod */
    public function signUp(){

    }
    /*this is the end of singnUp class*/
    public function confirmMail(){

    }
}