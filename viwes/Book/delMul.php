<?php
include_once ('../../vendor/autoload.php');
use Crud\Book\Book;
$book=new Book();
$checkboxes=$_POST['checkbox'];
var_dump($checkboxes);
foreach ($checkboxes as $ch){

     $book->delall($ch);
}
