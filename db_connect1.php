<?php
	require 'db_connect.php';
	$dbcr="CREATE DATABASE SAMPLE";
	
	if(mysqli_query($sql,$dbcr)){
		echo "Database connectedf successfully";
		
	}
	else{
		echo "Error creating database".mysqli_error($sql);
		
	}
	mysqli_close($sql);


?>