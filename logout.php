<?php
  session_start();
  if(isset($_SESSION['valid_user']))
  {
  	$old_user = $_SESSION['valid_user'];  // store  to test if user *was* logged in
  	unset($_SESSION['valid_user']);		// free session var valid_user 
	session_destroy();
	echo "<p>You  logged out</p>";
	echo "<a href=\"index.html\">Back to  Home page</a>"; 
  }
  
?> 