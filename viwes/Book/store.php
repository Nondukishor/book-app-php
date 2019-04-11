<?php
include_once ('../../vendor/autoload.php');
use Crud\Book\Book;

$book=new Book();
if (array_key_exists('title',$_POST) && !empty($_POST['title'])){
    $book->setData($_POST);
    $book->storeData();
    header('location:index.php');
}
else{
$_SESSION['Erorr']="Data not insearterd";
unset($_SESSION['Erorr']);
}