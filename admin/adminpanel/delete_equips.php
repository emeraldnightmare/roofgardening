<?php
include('../header.php');
include('../../cont.php');

?>


<?php

if(isset($_GET['id'])){

    $qry = "DELETE from equip where id = {$_GET['id']} ";
    $res = mysqli_query($connection,$qry);

    echo '<script>location.replace("equip.php")</script>';
}
?>