<?php
include('login.php'); // Include Login Script
if(isset($_SESSION['username']) != '')
{	
header('Location:home.php');	
}
?>
<!DOCTYPE HTML>
<html>
<head>	
<title>PHP Login Form</title>
<style>
	
* { margin:0px; padding: 0px;}
body { margin: 0 auto; text-align: center; }
.login-form { 
margin:0 auto;
margin-top:40px; 
border: 2px solid #000000;
width: 200px; padding:40px;  }
input{ padding:10px;   }
.error { color:#FF0000; margin-bottom:5px;   }		
</style>		
</head>		
	
<body>	
<div class="login-form">
<h2> PHP Login Form</h2> </br> </br>		
<form method="post" action="">	
<input type="text" name="username" placeholder="Username" /> </br> </br>
<input type="password" name="password" placeholder="Password" /> </br></br>
<input type="submit" name="submit" value="Login" /> </br> </br>
</form>	
<div class="error"> <?php echo $error ?> </div>
Not Register? <a href="register.php"> Signup Here </a> 	
</div>		
</body>	
	
</html>
