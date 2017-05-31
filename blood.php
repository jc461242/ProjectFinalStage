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
		      padding: 4px;
			  
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
<div class="wrapper">

<?php include 'header.php'; ?>

<section id="col4">
<h2>BLOOD TYPES WITH DESCRIPTION </h2>
<table>
  <tr>
    <th width="59">Blood Group</th>
    <th width="669">Description</th>
    <th>Availability</th>
  </tr>
  <tr>
    <td align="center">AB+</td>
    <td align="justify">AB Positive is the rarest blood type. AB plasma can be given to any patient regardless of their blood type.</td>
    <td align="center" onClick="">Yes</td>
  </tr>
  <tr>
    <td align="center">AB-</td>
    <td align="justify">AB Negative is the rarest blood type. AB- can be given to only AB+ and AB-.</td>
    <td align="center" onDblClick="">Yes</td>
  </tr>
  <tr>
 	 <td align="center">A+</td>
   	 <td align="justify">A Positive is the second most common blood type. A+ can be given to only A+ and AB+.</td>
     <td align="center">Yes</td>
  </tr>
  <tr>
<td align="center">A-</td> 
<td align="justify">Only six percent of the population has A Negative blood. A- can be given to only A+, A-, AB+ and AB-.</td> 
<td align="center">No</td> 
 </tr>
  <tr>
  <td align="center">B+</td>
  <td align="justify">B Positive is the third most common occurring blood type. Approximately 8.5% of the population has B+ blood group. B+ can be given to only B+ and AB+.</td>
  <td align="center">No</td>
  </tr>
  <tr>
  <td align="center">B-</td>
  <td align="justify">B Negative blood is rare. Approximately 1.5% of the population has this blood group. B- can be given to only B+, B-, AB+ and AB-.</td>
  <td align="center">Yes</td>
  </tr>
  <tr>
  <td align="center">O+</td>
  <td align="justify">O Positive is the most common blood type and therefore needed by so many patients. 1 in 3 people have O+ blood. O+ can be given to only O+, A+, B+ and AB+.</td>
  <td align="center">Yes</td>
  </tr>
  <tr>
  <td align="center">O-</td>
  <td align="justify">O Negative Blood type can be given to any blood group but it only receives the O-.</td>
  <td align="center">Yes</td>
  </tr>
</table>
</section>

<section id="col5">
<img src="image20.jpg" alt="Donate blood"> 
</section>

<footer><h3>Blood donation is our human duty</h3>
</footer>


</div>

</body>
</html>
