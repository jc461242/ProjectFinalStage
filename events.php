<!DOCTYPE html> 

<html>
<head>
<title>Donate Blood</title>
<link href="http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet" type="text/css">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link href="main.css" rel="stylesheet" >
<link href="responsive.css" rel="stylesheet" media="screen and
(max-width: 960px)">
</head>
<body>
<div class="wrapper">

<?php include 'header.php'; ?>

<section id="col1">
<h3>Events Form</h3>
<p><i>Fields marked with an asterisk (*) must be entered.</i></p>
<form action="events_process.php" method="post">

<table border="0">
	<tr>
    	<td align="right">* Event Name:</td>
    	<td><input type="text"  class="form-control" id="event_name" name="event_name" required></td>
        <td id="event_name_msg" style="color:red;"></td>
	</tr>
     <tr>
    	<td align="right">* Event Date</td>
    	<td><input type="date" id="event_date" name="event_date" required></td>
        <td id="event_date_msg" style="color:red;"></td>
	</tr>
	<tr>
    	<td align="right">* Event Location:</td>
    	<td><input type="text" name="location" id="location" required></td>
        <td id="location_msg" style="color:red;"></td>
	</tr>
	<tr>
    	<td align="right">* Event Description</td>
    	<td><input type="event_desc" id="event_desc" name="event_desc" required></td>
        <td id="pwd_msg" style="color:red;"></td>
	</tr>
  
	<tr>
    	<td align="right"><input type="submit" name="submit" value="Submit" ></td>
    	<td><input type="reset" name="reset" value="Clear"></td>
	</tr>
  </table>
</form>
</section>




<footer><h3>Blood donation is our human duty</h3>
</footer>


</div>

</body>
</html>
