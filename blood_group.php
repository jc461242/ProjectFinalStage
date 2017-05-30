<?php
include_once('config.php');

if(isset($_POST['Bloodgroup'], $_POST['Description'], $_POST['Availability'])) {
	$Bloodgroup = $_POST['Bloodgroup'];
	$Description = $_POST['Description'];
	$Availability = $_POST['Availability'];
	//make the database connection
	$conn  = db_connect();
	
	//create an insert query 	
	$sql = "insert into blood_group (Bloodgroup, Description, Availability) 
			VALUES ('$Bloodgroup', '$Description', '$Availability')";
	//execute the query
	if($conn -> query($sql))
	
	{
		echo "<h1>$Bloodgroup is entered successfully!</h1>";
		//echo "Hi <b>$Bloodgroup</b><br />";
		//echo "<a href=\"login.php\">You can login now</a>";
	}
	$conn -> close();		
}
else {
	die("Input error");
}
?>

