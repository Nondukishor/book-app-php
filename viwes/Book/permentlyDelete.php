<?php
include_once ('../../vendor/autoload.php');
use Crud\Book\Book;
$book=new Book();
$book->setData($_POST['records']);
var_dump($book);
$book->permentDelete();
header('location:trash.php');