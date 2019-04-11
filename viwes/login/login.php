<?php
include_once ('../../vendor/autoload.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<form action="confirmLogin.php" method="post">
    <label>E-Mail</label>
    <br>
    <input type="email" placeholder="Enter vaild mail address" name="email">
    <br>
    <label>Password</label>
    <br>
    <input type="password" placeholder="Enter password" name="pass">
    <br>
    <br>
    <input type="submit" name="submit" value="login">
</form>
</body>
</html>