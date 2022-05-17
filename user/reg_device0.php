<?php

DEFINE('HOST', 'shareddb-z.hosting.stackcp.net');
DEFINE('USER', 'smsgate-31363569e1');
DEFINE('PASSWORD', 'anu123456');
DEFINE('DB', 'smsgate-31363569e1');


	if(isset($_GET["Token"])){

		$token = $_GET["Token"];


		$con = mysqli_connect(HOST, USER, PASSWORD, DB) or die('unable to connect DB');


		$query = "INSERT INTO registered_devices (device, type) VALUES ('$token', 'sms') ON DUPLICATE KEY UPDATE device = '$token'";

		mysqli_query($con, $query);
		mysqli_close($con);

		echo 'Device Regitered';
	}else{
		echo 'Data NOT Found!';
	}


?>