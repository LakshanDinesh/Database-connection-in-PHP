<?php

	$dbhost="localhost:3306";
	$dbuser="root";
	$dbpass="";
	
	$sql = mysqli_connect($dbhost,$dbuser,$dbpass);

	if(! $sql){
	die('could not connect'.mysqli_error());
	}
	echo "Connect successfully";
	
	?>