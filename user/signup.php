<?php
session_start();

include('../sms/send_sms.php');
include('../cont.php');


if(isset($_POST['submitph'])){
    $phone = htmlspecialchars(mysqli_real_escape_string($connection,$_POST["phone"]));
    $user = htmlspecialchars(mysqli_real_escape_string($connection,$_POST["user"]));


    if(preg_match('/^[0][1-9]\d{9}$|^[1-9]\d{9}$/', $phone)){

        
        //echo $username.'<br>'.$password;
        $query = "SELECT * FROM `login` WHERE `phone`= {$phone} AND `role` = 'user'";
        $res = mysqli_query($connection,$query);
        $ress = mysqli_fetch_array($res,MYSQLI_ASSOC);

        
        if(isset($ress['id'])){
            $err = "User Already Exists";

        }else{
            
    $random_otp = mt_rand(0,999999);
    $_SESSION['otp'] = $random_otp;
    $_SESSION['user'] = $user;
    $_SESSION['phone'] = $phone;

    $msg = "Your Otp from SeedsGarden is ".$random_otp;
    $result = sendsms($phone,$msg);
    if($result == true){
        $show_form2 = 1;

    }else{
        $err = 'Some Error Occured';
    }
    
        }

}else{
    $err = "Phone's Format is Invalid";

}

}else if(isset($_POST['submitotp'])){
    $user = $_SESSION['user'];
    $phone = $_SESSION['phone'];
    $show_form2 = 1;
    if($_POST['otp'] == $_SESSION['otp']){
    $_SESSION['otp'] = '';
    $_SESSION['username'] = $user;

    $qry = "INSERT INTO `login` (`username`, `id`, `password`, `role`, `phone`) VALUES ('$user', NULL, '', 'user', '$phone');";
 
  if(mysqli_query($connection,$qry)){
 ?>

    <script>
    location.replace('login.php');
    </script>


    <?php
  }else{
    $err = "Server Error Occured ".$qry;
  }
    }else{
        $err = "Invalid OTP";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>signup form</title>
    <link rel="stylesheet" href="./login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>
    <div class="login-box">
        <h2>Sign up</h2>
        <form action="" method="POST" id="form1">

            <div class="user-box">

            <input type="text" name="user" required="">
                <label>Username.</label>

         
            </div>

            <div class="user-box">
            <input type="number" name="phone" required="">
                <label>PHONE NO.</label>
            </div>

            <a>
                <input type="submit" id="subbtn" name="submitph" required="" value="GET-OTP" style="all:unset">


                <span></span>
                <span></span>
                <span></span>
                <span></span>
           </a>

        </form>
        <form action="" method="POST" id="form2" class="hiddenn">

            <div class="user-box">
                <input type="number" name="otp" required="">
                <label>OTP.</label>
            </div>

            <a>
                <input type="submit" id="subbtn" name="submitotp" required="" value="Sign Up" style="all:unset">


                <span></span>
                <span></span>
                <span></span>
                <span></span>


            </a>

        </form>

        <h4 style="color:wheat">
            if you are a member then <a href="login.php"> Login ?</a>
        </h4>

        <br>
        <div style="color:red">
        <?php echo $err ?>
        </div>
    </div>

 

<?php if($show_form2 == 1){?>
    <script>
        document.getElementById("form1").classList.add("hiddenn");
        document.getElementById("form2").classList.remove("hiddenn");
    </script>
<?php } ?>

</body>

</html>