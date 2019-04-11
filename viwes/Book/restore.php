<?php
include_once ('../../vendor/autoload.php');
use Crud\Book\Book;
$book=new Book();
$book->setData($_GET);
$book->restoreData();

