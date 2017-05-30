<!DOCTYPE html> 

<html>
<head>
<title>Donate Blood</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
function checkRePassword(document) {	
	  var pwd = document.getElementById("password");
  	  var pwd_msg = document.getElementById('pwd_msg');
	  var repwd = document.getElementById("rePassword");	  
	  if (pwd.value != repwd.value) {
		pwd_msg.innerHTML = "The two passwords are not the same. Please re-enter both now";
		repwd.value = "";
		pwd.focus();
		return false;
	  }
	  else {
		pwd_msg.innerHTML = "";  
	  }  
	  return true;
	}	

	function validateInfo(document) { 
	  if (checkRePassword(document))
	  { 
		return true;
	  }
	  return false;
}



$(document).ready(function(){
    $("#btnSignup").click(function(){
        $("#loginform").hide();
		$("#signupForm").show();
		
    });
});
</script>
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
    
    <div id="signupForm" hidden="true">
    	<h1>Sign up form</h1> 
        <p><i>Fields marked with an asterisk (*) must be entered.</i></p>
        <form action="signup.php" method="post">
         <table border="0">
            <tr>
                <td align="right">*Full Name:</td>
                <td><input type="text" id="name" name="name" required></td>
            </tr>
            <tr>
                <td align="right">* Email:</td>
                <td><input type="email" name="email" id="email" required></td>
            </tr>
            <tr>
                <td align="right">* Password:</td>
                <td><input type="password" id="password" name="password" required></td>
                <td id="pwd_msg" style="color:red;"></td>
            </tr>
            <tr>
                <td align="right">* Re-try:</td>
                <td><input type="Password" id="rePassword" name="rePassword" onChange="checkRePassword(document)"></td>
            </tr>
            <tr>
                <td align="right"><input type="submit" name="submit" value="Submit" ></td>
                <td><input type="reset" name="reset" value="Clear"></td>
            </tr>
          </table> 
        </form>
    
    </div>
    
    <div id="loginform">
    <h3>Login</h3>
    <p><i>Please, enter your Username and password below.</i></p>
    <form action="login_process.php" method="post">
    <table border="0px" >
        <tr>
            <td align="left">Username:</td>
            <td><input type="text"  class="form-control" id="lemail" name="lemail" placeHolder="Your Email" required></td>
            <td id="username_msg" style="color:red;"></td>
        </tr>
         <tr>
            <td align="left">Password: </td>
            <td><input type="password" id="lpassword" name="lpassword" required></td>
            <td id="password_msg" style="color:red;"></td>
        </tr>
        <tr>
            <td align="right"><input type="submit" name="login" value="Login" ></td>
            <td><input type="reset" name="reset" value="Clear"></td>
        </tr>
        
      </table>
    </form>
    <br/>
      <br/>
        <br/>
          <br/>
    
            <button id="btnSignup" style="background-color:green;">Sign Up</button>
        
    </div>
</section>




<footer><h3>Blood donation is our human duty</h3>
</footer>


</div>

</body>
</html>
