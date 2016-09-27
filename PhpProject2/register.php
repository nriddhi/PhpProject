<?php
session_start();
include 'connection.php';
if(isset($_POST['signup']))
{	
$username = $_POST['username'];	

$email = $_POST['email'];	

$password = $_POST['password'];	

$username = stripcslashes($username);	

 $email = stripcslashes($email);	

$password = stripcslashes($password);

$username = mysqli_real_escape_string($conn, $username);

$email = mysqli_real_escape_string($conn, $email);

$password = mysqli_real_escape_string($conn, $password);	

$password = md5($password);	

$sql = "INSERT INTO reglog(username,email, password)	
VALUES('$username','$email', '$password')";	

if(mysqli_query($conn, $sql))	
{
?>		
<script>alert('Successfully Registered');</script>
<?php		
}	
else 	
{
	
?>
		
<script>alert('Error in register');</script>
		
<?php		
		
}		
}

?>
<!DOCTYPE HTML>
<html>
<head>	
<title>PHP Register Form</title>
<link type="text/css" rel="stylesheet" href="style.css" />
<style>
	
* { margin:0px; padding: 0px;}

body { margin: 0 auto; text-align: center; }
.regis-form { 
margin:0 auto;
margin-top:40px; 
border: 2px solid #000000;
width: 250px; padding:40px;  }
input { padding: 10px; }	
</style>		
</head>		
<body>	
<div class="regis-form">
<h2> PHP Register Form</h2> </br> </br>		
<form method="post" action="">	
<input type="text" name="username" placeholder="Username" /> </br> </br>
<input type="email" name="email" placeholder="Email" /> </br> </br>
<input type="password" name="password" placeholder="Password" /></br> </br>
<input type="submit" name="signup" value="Register" /> </br> </br>
	
</form>		
</div>			
</body>	
			
</html>
