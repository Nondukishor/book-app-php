<?php
include_once ('../../vendor/autoload.php');
use Crud\Book\Book;
$book=new Book();
if (array_key_exists('id',$_GET)&& !empty($_GET['id'])){
    $book->setData($_GET);
    $book->deleteData();
}
