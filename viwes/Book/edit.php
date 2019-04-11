<?php
include_once ('../../vendor/autoload.php');
use Crud\Book\Book;
$book=new Book();
$book->setData($_GET);
$singleData=$book->showData();
/*echo "<pre>";
print_r($singleData);*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link href="css_jss/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
<div class="jumbotron">
    <a href="index.php"><button class="btn btn-lg btn-success" href="index.php"> List</button></a>
    <?php
    if (isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
    ?>
    <form action="update.php" method="post">
        <label for="title"></label>
        <label for="price"></label>
        <label for="author"></label>
        <input type="hidden" name="id" value="<?php echo $singleData['id'] ?>" id="id">
        <input type="text" name="title" value="<?php echo $singleData['title']?>" id="title">
        <input type="text" name="price" value="<?php echo $singleData['price']?>" id="price">
        <input type="text" name="author" value="<?php echo $singleData['author']?>" id="author">
        <input type="submit" value="Update">
    </form>
</div>
</body>
</html>
