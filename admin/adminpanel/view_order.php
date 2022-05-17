<?php
include('../header.php');
include('../../cont.php');

?>


<?php

if(isset($_GET['id'])){

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
  </thead>
  <tbody>
   
    <?php

$itemno = 0;
$total = 0;

$order = mysqli_fetch_assoc(mysqli_query($connection,"select * from orders where id = {$_GET['id']}"));

$items = json_decode($order['items'],true);

foreach($items as $item){
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
      <td><?php echo $qty ?></td>

      <td>₹
<?php echo $ress['price'] ?></td>
      <td>₹
<?php echo $ress['price']*$qty ?>  </td>


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
    <?php

}
?>