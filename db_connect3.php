<?php
	require 'db_connect.php';
	$dbcr="CREATE DATABASE SAMPLE";
	
	if(mysqli_query($sql,$dbcr)){
		echo "Database connectedf successfully";
		
	}
	else{
		echo "Error creating database".mysqli_error($sql);
		
	}
	mysqli_select_db($sql, 'sample');
	
	$crtbl="create table practical(id INT AUTO_INCREMENT, name VARCHAR(20) NOT NULL, primary key(id))";
	
	if(mysqli_query($sql, $crtbl)){
		echo "TAble created successfully";
	}else{
		echo "table is not created";
	}
	
	mysqli_close($sql);


?>