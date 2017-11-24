<?php
	$adress = "localhost";
	$user = "root";
	$password = "";
	$database = "reg";
	
	$dbc = mysqli_connect($adress, $user, $password, $database);

	$fullname = $_POST['fullname'];
	$password = $_POST['Password'];

	$insert = "Select from reg(Username, Password) VALUES ('$fullname','$password');";
	
	if (mysqli_query($dbc, $insert)){

	echo "Succesfully logged in!";
	
	
	}
	else{
		echo "Something went wrong";
	}
?>