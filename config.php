<?php
//define constants for connection info
define("MYSQLUSER","team07mar17");
define("MYSQLPASS","password");
define("HOSTNAME","localhost");
define("MYSQLDB","team07mar17_blood");

//make connection to database
function db_connect()
{
	$conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if($conn -> connect_error) {
		die('Connect Error: ' . $conn -> connect_error);
	}
	return $conn;
} 
?>

