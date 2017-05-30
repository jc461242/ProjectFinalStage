<!DOCTYPE html> 

<html>
<head>
<title>Donate Blood</title>
<link href="http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet" type="text/css">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link href="main.css" rel="stylesheet" >
<link href="responsive.css" rel="stylesheet" media="screen and
(max-width: 960px)">

<meta name="viewport" content="width=device-width,initial-scale=1.0">

</head>
<body>
<div class="wrapper">

<?php include 'header.php'; ?>

<section id="col1">
<img src="volimage.jpg"  alt="Donate blood"> 

<html>
<head>
</head>
<body>
<h1>Please enter your profile </h1>
<p><i>Fields marked with an asterisk (*) must be entered.</i></p>
<form action="voluntary_process.php" method="post">
 <table border="0">
	
   	<tr>
    	<td align="right">* First Name:</td>
    	<td><input type="text" id="first_name" name="first_name" required></td>
	</tr>
	<tr>
    	<td align="right">* Last Name:</td>
    	<td><input type="text" id="last_name" name="last_name" required></td>
	</tr>
	<tr>
    	<td align="right">* Contact No.:</td>
    	<td><input type="text" id="contact_no" name="contact_no" required></td>
	</tr>
	<tr>
    	<td align="right"> Email:</td>
    	<td><input type="email" name="email" id="email" required></td>
	</tr>
	<tr>
    	<td align="right">* Age:</td>
    	<td><input type="age" id="age" name="age" required></td>
       
	</tr>

	<tr>
    	<td align="right"><input type="submit" name="submit" value="Submit" onClick="return validateInfo(document)"></td>
    	<td><input type="reset" name="reset" value="Clear"></td>
	</tr>
  </table> 
</form>
</body>

</section>
<footer><h3>Blood donation is our human duty</h3>
</footer>
</div>

</body>
</html>