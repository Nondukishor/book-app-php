<?php
include_once ('../../vendor/autoload.php');
use Crud\Book\Book;
$book=new Book();
$book->setData($_GET);
$singleData=$book->showData();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="css_jss/bootstrap.min.css" rel="stylesheet" type="text/css">
   <script src="css_jss/js.js" rel="script"></script>
   <script src="css_jss/popper.min.js" rel="script"></script>
   <script src="css_jss/bootstrap.min.js" rel="script"></script>
</head>
<body class="container">
<h1 class="text-primary text-center"> Showing Data</h1>
<a class="btn btn-success" href="index.php">List</a>
<h1 class="text-justify">Id=<?php echo $singleData['id']; ?></h1>
<h3 class="text-justify">Title=<?php echo $singleData['title']; ?></h3>
</body>
</html>

