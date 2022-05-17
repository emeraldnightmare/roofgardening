<?php   


        include('../session.php');

        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CART</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="../page.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
    button {
    margin: 8px;
    background-color: skyblue;
}</style>
</head>

<body>
<div class ="nav"> 
               <a href="../index.php" class="btn">Home</a> 
               <a href="../logout.php" class="btn">Logout</a> 

        </div>

  
  <div id="toast"></div>
<div id="toast-cart"></div>

<div class="container" style="margin-left: 40px;">
  <h1>CART</h1>
  <hr>
  <br>
  <div class="row">
 

  
<?php


include('../../cont.php');

if(!empty($_SESSION['items'])){
    // if items are set
//     echo '<pre>';
// print_r($_SESSION);
// echo '</pre>';

    ?>
    
    
<table class="table">
      <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Quantity</th>
      <th scope="col">Rate</th>
      <th scope="col">Total Rate </th>
      <th scope="col">Action</th>
  </thead>
  <tbody>
   
    <?php

$itemno = 0;
$total = 0;

foreach($_SESSION['items'] as $item){
$itemno++;
$id = $item['id'];
$qty = $item['qty'];
$itemjson = json_encode($item);

 if($item['type'] == 'eq'){
    $q = "SELECT * FROM `equip` where id = $id";
}else if($item['type'] == 'pt'){
    $q = "SELECT * FROM `plants` where id = $id";
}
else{
    $q= "";
}


if(!empty($q)){
    $res = mysqli_query($connection,$q);
    $ress = mysqli_fetch_assoc($res);

?>
        <tr>
      <th scope="row"><?php echo $itemno?></th>
      <td><b><?php echo $ress['name'] ?></b></td>
      <td><img src=<?php echo $ress['img_url'] ?> style="height: 120px;width:120px;"></td>
      <td>

      <button onclick="itemh('-','<?php echo htmlspecialchars($itemjson) ?>')">-</button>
      <?php echo $qty ?><button onclick="itemh('+','<?php echo htmlspecialchars($itemjson) ?>')">+</button></td>

      <td>₹
<?php echo $ress['price'] ?></td>
      <td>₹
<?php echo $ress['price']*$qty ?>  </td>

<td>
         <button class="btn btn-primary" onclick="remCart('<?php echo $item['type']?>',<?php echo $item['id']?>)"><center>Remove from cart</center></button>
</td>
    </tr>
   
<?php
$total = $total + $ress['price']*$qty;
}else{
    echo '<h1 style="align-self:center" color="black">Your Cart is Empty</h1>';
}
}

?>

  <thead class="thead-dark">
    <tr>
    <th scope="col" colspan="4"></th>

    <th scope="col">Total</th>
    <th scope="col">₹
<?php echo $total ?></th>

<th></th>


    </tr>



</tbody>
</table>

<div style="margin-left:80%;    position: absolute;
bottom:-12px;
">

<button type="button" class="btn btn-primary" onclick=" post('./proced_order.php', {total:<?php echo $total ?>});">Procced </button>
<br><br>

</div>

<?php
//if items are not set
}else{
    echo '<h1 style="align-self:center" color="black">Your Cart is Empty</h1>';

}
?>
</div>






</div>

<script>



function remCart(type,id){
      var cart = document.getElementById("toast-cart");
  cart.classList.add("show");
  //post('./cart/add_item.php', {id: id,qty:qty});

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      cart.innerHTML = '<i class="fas fa-shopping-cart cart"></i> Product remomved from cart';
      location.reload();
    }
  };
  xhttp.open("POST", "./rem_item.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("type="+type+"&id="+id);


  setTimeout(function(){
    cart.classList.remove("show");
  }, 3000);
}

function itemh(symbol,data){
  post('./funcitem.php', {'symbol':symbol,'data':data});

}




function placeorder(total){
      post('./placeorder.php', {total:total});

}

function post(path, params, method='post') {

const form = document.createElement('form');
form.method = method;
form.action = path;

for (const key in params) {
  if (params.hasOwnProperty(key)) {
    const hiddenField = document.createElement('input');
    hiddenField.type = 'hidden';
    hiddenField.name = key;
    hiddenField.value = params[key];

    form.appendChild(hiddenField);
  }
}

document.body.appendChild(form);
form.submit();
}
</script>
</body>
</html>