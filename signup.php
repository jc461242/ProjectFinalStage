<?php
include_once('config.php');

if(isset($_POST['name'], $_POST['email'], $_POST['password'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	//make the database connection
	$conn  = db_connect();
	//create an insert query 	
	$sql = "insert into users (name, email, password) 
			VALUES ('$name', '$email', '$password')";
	//execute the query
	if($conn -> query($sql))
	{
		echo "<h1>User Successfully Registered </h1>";
		echo "<a href=\"login.php\">Return Back</a>";
	}
	$conn -> close();		
}
else {
	die("Input error");
}
?>


