<?php
include('session.php');

// echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"><link rel="stylesheet" href="./page.css">
<title>
Equipments
</title>

</head>
<body>

<div class = "nav">




           
               <a href="cart/cart.php" class="btn" style="background-color:rebeccapurple">
              
              <?php $icon = 'cart';include('icons.php'); ?>
              </a>
               <a href="index.php" class="btn">Home</a> 
               <a href="logout.php" class="btn">Logout</a> 

        </div>

  
  <div id="toast"></div>
<div id="toast-cart"></div>

<div class="container">
  <h1>EQUIPMENTS</h1>
  <hr>
  <br>
  <div class="row">
 

<?php
$paget = "EQUIPMENTS";

include('../cont.php');

$q = "SELECT * FROM `equip`";
$res = mysqli_query($connection,$q);

while($ress = mysqli_fetch_assoc($res)){
    ?>
        <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
        
          <img src="<?php echo $ress["img_url"]?>"class="first-image">
         <div class="card-body">
         <button onclick="addCart(<?php echo $ress['id']?>,1,'eq')"><center>Add to cart</center></button>
         <hr>
          <center>
            
            <h4><b><?php echo $ress['name'] ?></b></h4>
            <p>₹<?php echo $ress['price'] ?></p>
          </center>
      </div>
       </div>
      </div>
   
<?php
}

?>
</div>
</div>
</body>


  <?php 


    include('footer.php');
  ?>

</html>


