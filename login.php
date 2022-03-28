<?php
require 'function.php';

if(!empty($_SESSION["id"])){
  header("Location: index.php");
}

$login = new Login();

if(isset($_POST["submit"])){
  $result = $login->login($_POST["usernameemail"], $_POST["password"]);

  if($result == 1){
    $_SESSION["login"] = true;
    $_SESSION["id"] = $login->idUser();
    header("Location: index.php");
  }
  elseif($result == 10){
    echo
    "<script> alert('Wrong Password'); </script>";
  }
  elseif($result == 100){
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="attract">
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
      <label for="">Username or Email : </label><br>
      <input type="text" name="usernameemail" required value=""> <br>
      <label for="">Password:</label><br>
      <input type="password" name="password" required value=""> <br><br>
      <button type="submit" name="submit">Login</button>
       <a href="registration.php" >Signup</a><br>
    </form></div>
    <br>
   
  </body>
</html>
