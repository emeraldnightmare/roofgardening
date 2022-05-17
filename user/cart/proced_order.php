<?php   

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proced order</title>
</head>
<body>
<div class="container" style="margin-left: 40px;">
  <h1>ADDRESS DETAILS</h1>
  <hr>
</div>


<form  style="padding: 40px;" action="placeorder.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">NAME</label>
      <input type="name" class="form-control" id="" placeholder="name"required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">PHONE NO.</label>
      <input type="number" class="form-control" id="" placeholder="number" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" required>
    </div>
    
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck"required>
      <label class="form-check-label" for="gridCheck">
       COD(cash on delievery)
      </label>
    </div>
  </div>

  <input type="text" name="total" value="<?php echo $_POST['total']?>" hidden>
  <button type="submit" class="btn btn-primary">checkout</button>
</form>









</body>
</html>
