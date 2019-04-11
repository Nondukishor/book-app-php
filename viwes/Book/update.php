<?php
include_once ('../../vendor/autoload.php');
use Crud\Book\Book;
$book=new Book();
$book->setData($_POST);
$book->updateData();
if (array_key_exists('title',$_POST)&& !empty($_POST['title'])){
    if (array_key_exists('price',$_POST)&& !empty($_POST['price'])){
        if (array_key_exists('author',$_POST) && !empty($_POST['author'])){
            $book->setData($_POST);
            $book->updateData();
        }
    }


}
else{
    $_SESSION['error']='ttile should not be empty';
    header('location:index.php');

}
?>
