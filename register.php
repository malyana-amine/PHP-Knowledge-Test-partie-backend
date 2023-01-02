<?php

include './classes/user.php' ;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
  if(isset($_POST['submit'])){
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $reg = new user($userName,$email,$password);
    $reg->registerUser();
  }?>


    <form method="POST" >
    <label for="">userName</label>
    <input name="userName" type="text">
    <label for="">email</label>
    <input name="email" type="email">
    <label for="">password</label>
    <input name="password" type="password" name="" id="">
    <button type="submit" name="submit">register</button>
</form>



<?php


if(isset($_POST['submit1'])){
        $email = $_POST['email1'];
        $password = $_POST['password1'];
        // var_dump($password);
        $log = new user(null,$email,$password);
        $log->loginUser();
        

        
    }



?>

<form method="POST">
    <label for="">email</label>
    <input type="email" name="email1">
    <label for="">password</label>
    <input type="password" name="password1" id="">
    <button type="submit" name="submit1">login</button>
</form>
</body>
</html>