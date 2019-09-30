<?php

	$dbserver = "localhost";
	$dbid = 'root';
	$dbpass = '';
	$dbname = 'biodb';
	$connection = mysqli_connect($dbserver,$dbid,$dbpass,$dbname);

	if($connection == false){
		echo "connection error";
	}
?>
