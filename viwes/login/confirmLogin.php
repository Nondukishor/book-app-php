<?php
include_once ('../../vendor/autoload.php');
use Crud\Login\Login;
$login=new Login();
$email=$_POST['email'];
$pass=$_POST['pass'];
$login->login($email,$pass);