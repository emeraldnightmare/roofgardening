<?php 
    
    session_start();

    if(!isset($_SESSION["username"]))
    {
      //  echo'unable to find session'.$_SESSION["username"];
?>
 <script> location.replace('login.php');</script>
<?php
        die();
    }else{
     //   echo'able to find session'.$_SESSION["username"];

    }
    
   ?>