<title>SearchData</title>
<?php
include_once ('../../vendor/autoload.php');
use Crud\Book\Book;
$book=new Book();

//var_dump($_POST);
if (array_key_exists('title',$_POST)&& !empty($_POST['title'])){
  $book->setData($_POST);
    $singleData = $book->searchData();
}
else{
    echo 'Data not found';
}

?>
<!--<h1>NAME: <?php /*//echo $bookList[] */?><!--</h1>-->
<!--<h3 class="text-justify">Title=<?php /*echo $singleData['title'] ; */?></h3>-->

<?php

foreach($singleData as $value){?>
<p><?php echo $value['title']?><p/>

<?php }?>


