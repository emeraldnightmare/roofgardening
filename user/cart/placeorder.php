<?php   


        include('../session.php');
        include('../../cont.php');


        if(isset($_POST['submit'])){
          if(!empty($_POST['total'])){
          }else{
              die("Some Error Orrured");
          }
      }

        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Status</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="../page.css">
</head>

<body>
<div class ="nav"> 
               <a href="../index.php" class="btn">Home</a> 
               <a href="../logout.php" class="btn">Logout</a> 

        </div>



  <?php if(isset($_POST['total']) && is_numeric($_POST['total'])){
      
      include('../../sms/send_sms.php');
      $random = mt_rand(1000,9999);

      $orderno = $random;
      $total = $_POST["total"];
$msg = "Thank You For your order your total is ".$total." and your order id is ".$orderno;

$datatosave = json_encode($_SESSION['items']);

$qry = "INSERT INTO `orders` (`username`, `total`, `items`, `id`) VALUES ('{$_SESSION['username']}', '{$_POST['total']}', '$datatosave', NULL);";

mysqli_query($connection,$qry);

unset($_SESSION['items']);

     $ans =  sendsms($_SESSION['phone'],$msg);
      ?>

<div class="card">
  <div class="card-header">
      Your order is confirmed 
  </div>
  <div class="card-body">
    <h5 class="card-title">
       Thank you, visit again !!
    </h5>
    <a href="../index.php" class="btn btn-primary">Go to Home Page</a>
  </div>
</div>
  
<?php }else{
    echo '<h1>Some Error Occured</h1>';
} ?> 
 

</body>
</html>