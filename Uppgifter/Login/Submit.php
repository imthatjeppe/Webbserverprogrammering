	$adress = "localhost";
	$user = "root";
	$password = "";
	$database = "reg";
	
	$dbc = mysqli_connect($adress, $user, $password, $database);

	$fullname = $_POST['fullname']
	$password = $_POST['Password'];

	$insert = "insert into registrering (fullname, pass) VALUES ('$username','$password');";

