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

<!--<header><h1>Donate Blood</h1></header>
<nav>
			<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href=" ">Place</a></li>
			<li><a href=" ">Voluntary</a></li>
			<li><a href=" ">Donate</a></li>
            
            <li> 
                <a href="blood.html">Blood Types</a> 
    		</li>
                           
            <li><a href=" ">About</a></li>
            <li><a href="staffmembers.html">Doctors</a></li>
			<li><a href=" ">Contact</a></li>
			</ul>
		
</nav>-->
<?php include 'header.php'; ?>

<section id="coldef">
<h1>Enter Staff Details</h1>


<form action="staffmembers.php" method="post">
 <table border="0">
	<tr>
    	<td align="right">Name</td>
    	<td><input type="text" id="Name" name="Name" required></td>
	</tr>
		<tr>
    	<td align="right">Contact</td>
    	<td><input type="text" id="Contact" name="Contact" required></td>
       
	</tr>
    <tr>
    	<td align="right">Email</td>
    	<td><input type="text" name="Email" id="Email" required></td>
	</tr>
		<tr>
    	<td align="right"><input type="submit" name="submit" value="Submit" onClick="return validateInfo(document)"></td>
    	<td><input type="reset" name="reset" value="Clear"></td>
	</tr>
  </table> 
</form>
</section>

<section id="colghi">
<img src="image12.png" alt="Donate blood"> 
</section>

<footer><h3>Blood donation is our human duty</h3>
</footer>


</div>

</body>
</html>
