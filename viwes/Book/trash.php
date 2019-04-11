<?php
include_once ('../../vendor/autoload.php');
use Crud\Book\Book;
$book=new Book();
$books=$book->trushData();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css_jss/bootstrap.min.css" rel="stylesheet">
    <title>Trashpage</title>
</head>
<body>
<h1 class="text-center">Trush</h1>
<div>
    <ul>
        <a href="index.php"><button class="btn-lg btn-success">Back</button></a>

    </ul>
</div>
<div class="text-center">

</div>

<table class="table table-bordered" style="float: left;margin: 100px auto">

    <thead class="table-dark">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Price</th>
        <th>Author Name</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody class="table-success">
    <?php $id=0;
    foreach ($books as $book){?>
        <tr>
            <td><p>	<?=++$id?></p></td>
            <td><?= $book['title']?></td>
            <td><?= $book['price']?></td>
            <td><?= $book['author']?></td>
            <td>
                <a class="btn btn-success" href="permentlyDelete.php?id=<?=$book['id']?>" onclick="return confirm('Are you sure to permently delete Data?')">delete</a>
                <a class="btn btn-success" href="restore.php?id=<?=$book['id']?>" onclick="return confirm('Are you sure to restore data?')">Restore</a>
            </td>
        </tr>
    <?php }?>
    </tbody>
</table>
</body>
</html>
<?php
function trush(){

}
?>