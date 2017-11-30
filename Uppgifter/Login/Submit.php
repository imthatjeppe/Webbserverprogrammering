<?php
	$adress = "localhost";
	$user = "root";
	$password = "";
	$database = "reg";
	
	$dbc = mysqli_connect($adress, $user, $password, $database);

	$fullname = $_POST['fullname'];
	$password = $_POST['Password'];

	$query = "Select * from registrering where fullname = '$fullname' and pass = '$password';";
	
	$result = mysqli_query($dbc, $query);
	
	if (mysqli_fetch_array($result)){

	echo "Succesfully logged in!";
	
	
	}
	else{
		echo "Something went wrong";
	}
?>