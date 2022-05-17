<?php
   $host = 'shareddb-z.hosting.stackcp.net';
   $dbname = 'seedsgarden-313635a100';
   $dbpassword = 'hardik3259';
   $dbuser = 'seedsgarden-313635a100';

    $connection = mysqli_connect($host,$dbuser,$dbpassword,$dbname);

    // Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " + mysqli_connect_error();
    exit();
}
else {
    // echo 'successfull';
}
?>