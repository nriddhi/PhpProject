<?php

session_start();
include'connection.php';
$error = "";
if(isset($_POST['submit']))
{	
if(empty($_POST['username']) || empty($_POST['password'])	
{		
$error = 'Both fields required';			
}	
else {		
$username = $_POST['username'];
$password = $_POST['password'];		
$username = stripcslashes($username);		
$password = stripcslashes($password);		
$username = mysqli_real_escape_string($conn, $username);		
$password = mysqli_real_escape_string($conn, $password);		
$password = md5($password);			
$sql = "SELECT user_id FROM reglog WHERE username='$username'and password = '$password' ";
			
$result = mysqli_query($conn, $sql);		
if(mysqli_num_rows($result) == 1)		
{		
		   $_SESSION['username'] = $username;			
header("location:home.php");			
}
else {						
$error= "Incorrect username or password";
} }		
}

?>
