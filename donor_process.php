<?php
include_once('config.php');

if(isset($_POST['name'], $_POST['age'], $_POST['gender'],$_POST['bloodgroup'],$_POST['address'],$_POST['contactdetails'])) {
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$bloodgroup = $_POST['bloodgroup'];
	$address = $_POST['address'];
	$contactdetails = $_POST['contactdetails'];
	
		//make the database connection
	$conn  = db_connect();
	//create an insert query 	
	$sql = "insert into donor(name, age, gender, bloodgroup, address, contactdetails) 
			VALUES ('$name', '$age', '$gender', '$bloodgroup', '$address', '$contactdetails');";
	//execute the query

	if($conn -> query($sql))
	
	{
		echo "<h1>Donors registered successsfully</h1>";
	
		
		echo "<a href=\"donor.php\">Go back </a></br>";
		
	
	}
	$conn -> close();		
}
else {
	die("Input error");
}
?>