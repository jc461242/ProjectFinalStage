<?php

include_once('config.php');

if(isset($_POST['event_name'], $_POST['event_date'], $_POST['location'], $_POST['event_desc'])) {
	$event_name = $_POST['event_name'];
	$event_date = $_POST['event_date'];
	$location = $_POST['location'];
	$event_desc = $_POST['event_desc'];
	
	//make the database connection
	$conn  = db_connect();

	
	//create an insert query 	
	$sql = "insert into events (event_name, event_date, location,event_desc) 
			VALUES ('$event_name', '$event_date', '$location','$event_desc');";
	//execute the query
	if($conn -> query($sql))
	{
		header('location:events.php?msg=Successfully');
	}
	$conn -> close();		
}
else {
	die("Input error");
}
?>
