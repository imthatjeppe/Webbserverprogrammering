<?php
	$adress = "localhost";
	$user = "root";
	$password = "";
	$database = "reg";
	
	$dbc = mysqli_connect($adress, $user, $password, $database);

	$fullname = $_POST['fullname'];
	$password = $_POST['Password'];

	$Select = "Select * from registrering where fullname = '$fullname' and pass = '$password';";
	
	if (mysqli_query($dbc, $Select)){

	echo "Succesfully logged in!";
	
	
	}
	else{
		echo "Something went wrong";
	}
?>