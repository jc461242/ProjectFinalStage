<?php
include_once('config.php');

if(isset($_POST['first_name'], $_POST['last_name'], $_POST['contact_no'], $_POST['email'], $_POST['age'])){
	
    
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$contact_no = $_POST['contact_no'];
    $email = $_POST['email'];
	$age = $_POST['age'];
	
	
	
	echo 'here';die();
	//make the database connection
	$conn  = db_connect();
	
	//create an insert query 
	$sql = "insert into volunteers (first name,last name,contact no, email,age) 
			VALUES ('$first_name', '$last_name,'$contact_no','$email','$age')";
	if($conn -> query($sql))
	{
		echo "<h1>Welcome to Donate Blood</h1>";
		
	}
	$conn -> close();		
}
else {
	die("Input error");
}
?>

