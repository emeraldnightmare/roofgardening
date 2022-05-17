<?php

include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $paget ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="./admin.php">Seeds Garden</a>
  <button onclick="shownav()" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon">
    </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText" style="padding-left: 70px;">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./admin.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./orders.php">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./user.php">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./plants.php">Plants</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./equip.php">Equipments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>


<script>

var some = false;


function shownav(){
   var nav =  document.getElementById('navbarText');
   if(some == false){
   nav.classList.remove('collapse');
   some = true;
   }else{
    nav.classList.add('collapse');
    some = false;
   }


}

</script>
    
