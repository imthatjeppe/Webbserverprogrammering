<?php

	$adress = "localhost";
	$user = "root";
	$password = "";
	$database = "reg";
	
	$dbc = mysqli_connect($adress, $user, $password, $database);

	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['Password'];
	$Date = $_POST['Birthday'];
	
	$insert = "insert into registrering (fullname, userName, email, pass, date) VALUES ('$username','$fullname','$email','$password','$Date');";

	echo $insert;
	mysqli_query($dbc, $insert);
	
	






?>