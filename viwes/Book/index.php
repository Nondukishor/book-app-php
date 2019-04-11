<?php
include_once ('../../vendor/autoload.php');
use Crud\Book\Book;
$book=new Book();
$books=$book->indexData();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css_jss/bootstrap.min.css" rel="stylesheet">
    <title>index</title>
</head>
<body style="background-image: url('../../back.jpg')">
<h1 class="jumbotron text-center" style="background-color: rgba(0,0,0,.2); color: white; text-shadow: 4px 4px 4px darkgray">Book Store</h1>
<form class="form-group" action="searchData.php" method="post">
    <div class="">
        <input class="" type="text" placeholder="Search.." name="title">
        <button type="submit" class="btn btn-success">Search</button>
    </div>
</form>
<div>
    <ul>
        <a href="create.php"><button class="btn-lg btn-success">ADD NEW BOOK</button></a>
        <a href="trash.php"><button class="btn-lg btn-success">Trash</button></a>


    </ul>
</div>
<div class="text-center">

</div>
<?php
if (isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
?>
<form action="delMul.php" method="post">
    <table class="table table-bordered" style="background-color: rgba(0,0,0,.2);color: white">

        <thead class="">
        <tr>
            <th>Mark</th>
            <th>id</th>
            <th>Title</th>
            <th>Price</th>
            <th>Author Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody class="table-success" style="background-color: rgba(0,0,0,.2); color: white; text-shadow: 4px 4px 4px black">
<?php $id=0;
foreach ($books as $book){?>
        <tr>
            <td><input type="checkbox" name="checkbox" value="<?php echo $book['id']?>">
            </td>
            <td><p>	<?=++$id?></p></td>
            <td><?php echo $book['title'];?></td>
            <td><?php echo $book['price'];?></td>
            <td><?php echo $book['author'];?></td>
            <td>
               <a class="btn btn-success" href="show.php?id=<?=$book['id']?>" >Show</a>
                <a class="btn btn-success" href="edit.php?id=<?=$book['id']?>">Edit</a>
                <a class="btn btn-success" href="delete.php?id=<?=$book['id']?>" onclick="return confirm('Data has been trashed')">Delete</a>
            </td>
        </tr>
        <?php }?>

        </tbody>
    </table>
<div>

        <input class="btn btn-success" name="delM" value="Dlete all" type="submit">
    </form>

</div>
</body>
</html>