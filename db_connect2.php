<?php
	require 'db_connect.php';
	
	$drp="Drop Database Sample";
	
	if(mysqli_query($sql,$drp)){
		echo "Record Deleted Successfully";
	}
	
	else{
		echo "Error Deleting record ".mysqli_error($sql);
	}
	mysqli_close($sql);

	
?>