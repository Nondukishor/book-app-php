<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css_jss/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="css_jss/Myjs.js" rel="script"></script>
    <title>Createpage</title>
    <script>
        $('#title').on('input',function () {
            if($this).val().length>10){
            alert('Book name should be less than 10')
        }

        });
        $('#price').on('input',function () {
            if($this).val().length>10){
            alert('price should be less than 10 digit')
        }

        });
    </script>
</head>
<body>
<a href="index.php" class="btn btn-success">Back</a>
<form action="store.php" method="post" class="container jumbotron form-group" style="margin: 100px auto">
 <div>
     <label for="title">Title:</label>
 </div>
    <div>
        <input maxlength="10" type="text" name="title" placeholder="Enter a title" id="title">
    </div>
    <div>
        <label for="price">Price</label>
    </div>
    <div>
        <input maxlength="10" type="number" placeholder="Enter Price amount" name="price" id="price">
    </div>
    <div>
        <label for="author">Author Name:</label>
    </div>
    <div>
        <input maxlength="10" type="text" name="author" placeholder="Enter author name" id="author">
    </div>
    <br>
    <div>
        <input type="submit">
    </div>

</form>
</body>
</html>