<?php
include('../../cont.php');
include('../header.php');



if(isset($_POST['submit'])){
    $img = $_POST['img_url'];
    $name = $_POST['name'];
    $rate = $_POST['price'];
    
 $err = array();

 if(empty($img)){
    $err[] = "Enter A Img";
}

if(empty($name)){
    $err[] = "Enter A Name";
}

if(empty($rate)){
    $err[] = "Enter A Rate";
}

if(!is_numeric($rate)){
    $err[] = "Enter A Rate of numers";

}

if(empty($err)){
    $qry = "INSERT INTO `plants` (`name`, `id`, `price`, `img_url`) VALUES ('$name', NULL, '$rate', '$img');";

    mysqli_query($connection,$qry);

    echo '<script>location.replace("plants.php")</script>';
}

}

?>


<?php
foreach($err as $error){
    echo $error.'<br>';
}

?>
<div class="container" style="margin-left: 40px;">
  <h1>INSERT PLANTS</h1>
  <hr>
</div>
<form action="" method="POST"> 
  <div class="form-group">

    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" name="name">
  </div>


  <div class="form-group">

<label for="ikmg">Img Url</label>
<input type="text" class="form-control" id="ikmg" aria-describedby="emailHelp" placeholder="Enter Img Url" name="img_url">
</div>



<div class="form-group">

<label for="price">Rate</label>
<input type="number" class="form-control" id="price" aria-describedby="emailHelp" placeholder="Enter Rate" name="price">
</div>




  <input type="submit" class="btn btn-primary" name="submit"></input>
</form>





<?php

include('../footer.php');
?>