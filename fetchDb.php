<?php
	$con=mysqli_connect("localhost","root","","my_db");
	if (mysqli_connect_errno($con))
	{
	   echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$username = $_GET['username'];
	$password = $_GET['password'];
	$result = mysqli_query($con,"SELECT Role FROM table1 where Username='$username' and Password='$password'");
	$row = mysqli_fetch_array($result);
	$data = $row[0];
	if($data){
		echo "Fetched Data From my_db.table1 : "; 
		echo "<br>";
		echo $data;
	}
	else{
		echo "Username and or password not valid";
		header("Location: localhost://index.php");
		exit;
	}
	mysqli_close($con);
?>