<?php
include('../header.php');
include('../../cont.php');

?>


<?php

if(isset($_GET['id'])){

    $qry = "DELETE from orders where id = {$_GET['id']} ";
    $res = mysqli_query($connection,$qry);

    echo '<script>location.replace("orders.php")</script>';
}
?>