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
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th {
	background-color:#cc231a;
    color: black;
      padding: 4px;
	  
}
td {
	text-decoration:blink;
		      padding: 12px;
			  
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
<div class="wrapper">
<?php include 'header.php'; ?>


<section id="colabc">
<h1>Enter Blood Availability</h1>


<form action="blood_group.php" method="post">
 <table border="0">
	<tr>
    	<td align="right">Bloodgroup</td>
    	<td><input type="text" id="Bloodgroup" name="Bloodgroup" required></td>
	</tr>
		<tr>
    	<td align="right">Description</td>
    	<td><input type="text" id="Description" name="Description" required></td>
       
	</tr>
    <tr>
    	<td align="right">Availability</td>
    	<td><input type="text" name="Availability" id="Availability" required></td>
	</tr>
		<tr>
    	<td align="right"><input type="submit" name="submit" value="Submit" onClick="return validateInfo(document)"></td>
    	<td><input type="reset" name="reset" value="Clear"></td>
	</tr>
  </table> 
</form>
</section>

<section id="col5">
<img src="image20.jpg" alt="Donate blood"> 
</section>

<footer><h3>Blood donation is our human duty</h3>
</footer>


</div>

</body>
</html>
