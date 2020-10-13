<?php
	$dbhost="localhost:3306";
	$dbuser="root";
	$dbpass="";
	$dbname="Sample";
	$sql=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
	
?>
<html>
	<head><title>Data Insertion</title></head>
	<body>
		<form action="<?php $_PHP_SELF?>" method="post">
			<lable>Name:</lable>
			<input type="text" name="name"><br>
			<lable>Age:</lable>
			<input type="number" name="age"><br>
			<input type="submit" name="submit"><br>
		</form>
	</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$indata="INSERT INTO practical(name) values('".$_POST["name"]."')";
		
		if (mysqli_query($sql, $indata)){
			echo "New record created successfully";
			
		}else{
			echo "Error".$indata.mysqli_error($sql);
		}
		mysql_close($sql);
	}

?>