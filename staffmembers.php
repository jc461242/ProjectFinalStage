<?php
include_once('config.php');

if(isset($_POST['Name'], $_POST['Contact'], $_POST['Email'])) {
	$Name = $_POST['Name'];
	$Contact = $_POST['Contact'];
	$Email = $_POST['Email'];
	//make the database connection
	$conn  = db_connect();
	
	//create an insert query 	
	$sql = "insert into staffmembers (Name, Contact, Email) 
			VALUES ('$Name', '$Contact', '$Email')";
	//execute the query
	if($conn -> query($sql))
	
	{
		echo "<h1>$Name you are now the part of our WEBSITE!</h1>";
		//echo "Hi <b>$Name</b><br />";
		//echo "<a href=\"login.php\">You can login now</a>";
	}
	$conn -> close();		
}
else {
	die("Input error");
}
?>

