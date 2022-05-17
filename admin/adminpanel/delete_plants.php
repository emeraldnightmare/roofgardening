<?php
include('../header.php');
include('../../cont.php');

?>


<?php

if(isset($_GET['id'])){

    $qry = "DELETE from plants where id = {$_GET['id']} ";
    $res = mysqli_query($connection,$qry);

    echo '<script>location.replace("plants.php")</script>';
}
?>