<?php
  session_start();

  echo "<h1>Members only</h1>";

  // check session variable

  if (isset($_SESSION['valid_user']))
  {
    echo "<p>You are logged in as " . $_SESSION['valid_user'] . "</p>";
    echo "<p>Members only content goes here</p>";
	echo "<a href=\"Volunteers_view.php\">View Volunteers</a></br>";
	echo "<a href=\"donors_view.php\">View Donors</a></br>";
	echo "<a href=\"staff_view.php\">View Nurse Staff</a></br>";
	echo "<a href=\"events_view.php\" >View Events</a></br>";
	
	echo "<br/>";
	echo "<h3>Add Events and Blood Types<h3>";
	echo "<a href=\"events_view.php\" >Add Events Data</a></br>";
	echo "<a href=\"bloodENTRY.html\" >Add Blood Data</a></br>";
	
	
	echo "<a href=\"logout.php\">Logout</a>";
  }
  else
  {
    echo "<p>You are not logged in.</p>";
    echo "<p>Only logged in members may see this page.</p>";
	echo "<a href=\"index.html\">Back to home page</a>";
  }  
?>
