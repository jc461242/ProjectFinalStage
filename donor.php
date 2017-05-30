<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Donor</title>

<link href="http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister" rel="stylesheet" type="text/css">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<link href="main.css" rel="stylesheet" >
<link href="responsive.css" rel="stylesheet" media="screen and
(max-width: 960px)">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<script>
 
 function checkName(document)
 {
	  
	 var name=document.getElementById("name");
	 var name_msg=document.getElementById("name_msg");
	 
	 if(name.value == ""){
		 name_msg.innerHTML="Please enter name.";
		 name.focus();
		 return false;}
	else{
			name_msg.innerHTML="";
			 }
	return true;
}
function validateForm(document)
 {
	
	 if (checkName(document) )
	 {
		return true; 
		 }
	 return false;
	 
}

function checkage(document){
	var age=document.getElementById("age");
	 var age_msg=document.getElementById("age_msg");
	 
	 if(age.value<16){
		 age_msg.innerHTML="You are not Eligible To donate blood.";
		 age.focus();
		 return false;
	}	
	return true;

}
</script>
</head>
<body>
<div class="wrapper">

<?php include 'header.php'; ?>


<section id="col1">



<h1>Donor Registration</h1>
<p>Fields mark with (*) must be mandatory</p>
<form action="donor_process.php" method="post">
<table border="0" height="500px">
<tr>
<td>* Name:</td>
<td><input type="text" id="name" name="name" onChange="checkName(document)" required></td>
<td id="name_msg" style="color:Blue;"></td>
</tr>
<tr>
<td>* Age : </td>
<td><input type="text" name="age" id="age" onChange="checkage(document)" required></td>
<td id="age_msg" style="color:Blue;"></td>
</tr>
<tr>
<td>Gender :</td>
<td><input type="radio" name="gender" value="male" checked> Male</td>
<td><input type="radio" name="gender" value="female" checked> Female</td>
</tr>
<tr>
 <td>* Bloodgroup:</td> 	

<td>
  <select name="bloodgroup" required>
    <option value="a+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O-</option>
    <option value="O-">O-</option>
  </select>
</td>
</tr>
<tr>
<td>Address:</td>
<td><input type="text" name="address"></td>
</tr>
<tr>
<td>Contactdetails :</td>
<td><input type="text" name="contactdetails" required></td>
</tr>
<tr>
<td><input type="submit" id="submit" onclick="return validateForm(document)"></td>
<!--<td><input type="reset" id="reset" value="clear"></td>-->
</tr>
</table>
</form>



</section>


<footer><h3>Blood donation is our human duty</h3>
</footer>
</div>
</body>


</html>
