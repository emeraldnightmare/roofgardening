<?php
session_start();
if(isset($_SESSION["username"]))
{
?>

<script>
location.replace('index.php');
</script>

<?php
}

            include('../sms/send_sms.php');
            include('../cont.php');

            if(isset($_POST['guest'])){
                $_SESSION["username"] = "Guest";
                echo "<script>location.replace('index.php');</script>";
            }

            if(isset($_POST['submitph']))
            {
                $phone = htmlspecialchars(mysqli_real_escape_string($connection,$_POST["phone"]));


                if(preg_match('/^[0][1-9]\d{9}$|^[1-9]\d{9}$/', $phone))
                {


                            //echo $username.'<br>'.$password;
                            $query = "SELECT * FROM `login` WHERE `phone`= {$phone} AND `role` = 'user'";
                            $res = mysqli_query($connection,$query);
                            $ress = mysqli_fetch_array($res,MYSQLI_ASSOC);

                            if(!isset($ress['id']))
                                {
                                $err = "User Dont Exists Please Sign up ".print_r($ress);
                    
                                }
                            else
                            {
                                    $random_otp = mt_rand(100000,999999);
                                    $_SESSION['otp'] = $random_otp;
                                    $msg = "Your Otp from roofgardening is: ".$random_otp;
                                    
                                    
                                    //old
                                    $result = sendsms($phone,$msg);
                                    
                             
                                    //   $result = sendsms1($phone,$msg);


    
    
                                    
                                    
                                    
                                    
                                    $_SESSION['temp'] = $ress['username'];
                                    $_SESSION['phone'] = $ress['phone'];
                
                                            if($result == true)
                                            {
                                                $show_form2 = 1;
                                            }
                                            else
                                            {
                                                $err = 'Some Error Occured';
                                            }
                                }
                    }
                else
                    {
                        $err = "Phone's Format is Invalid";

                    }

            }
            else if(isset($_POST['submitotp']))
                
            {
                            $show_form2 = 1;
                            if($_POST['otp'] == $_SESSION['otp'])
                                {
                                    $_SESSION['otp'] = '';
                                    $_SESSION['username'] = $_SESSION['temp'];
                                    ?>

                                    <script>
                                    location.replace('index.php');
                                    </script>
                                    <?php

                                }
                            else
                                {
                                    $err = "Invalid OTP";
                                }

            }

?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>login form</title>
    <link rel="stylesheet" href="./login.css">

</head>

<body>

    <div class="login-box">
        <h2>Login</h2>
        <form action="" method="POST" id="form1">

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
                <input type="submit" id="subbtns" name="submitotp" required="" value="LOGIN" style="all:unset">


                <span></span>
                <span></span>
                <span></span>
                <span></span>


            </a>

        </form>
        <form action="" method="POST" id="form3" class="hidden" >

<a>
    <input type="submit" id="submitbtn" name="guest" required="" value="LOGIN As Guest" style="all:unset">


    <span></span>
    <span></span>
    <span></span>
    <span></span>
</a>
</form>


        <h4 style="color:wheat">
            if you are not a member the <a href="signup.php"> Sign UP ?</a>
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