<?php
session_start();
// print_r($_SESSION);

$err = '';
include('../cont.php');
 if(isset($_POST["username"]) && isset($_POST["password"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    //echo $username.'<br>'.$password;
    $query = "SELECT * FROM `login` WHERE `username`= '$username'  AND `password`= '$password' AND `role` = 'admin'";
    $res = mysqli_query($connection,$query);
    $ress = mysqli_fetch_array($res,MYSQLI_ASSOC);

    
    if(isset($ress['id'])){
        $_SESSION["user"] = $username;
  echo '<script>location.replace("./adminpanel/admin.php")</script>';      
      }else{
        $err = 'not an admin';
    }

 }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">

</head>
<body>
    <form  class = 'box' action="" method="POST">
        <h1>ADMIN</h1>
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password" >
        <input type="submit" name="" value="login">

        <br>
        <div style="color:red"> 
        <?php
        echo $err;
        ?>
        </div>
    </form>
    
</body>
</html>