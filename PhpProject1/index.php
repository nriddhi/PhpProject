
<head>

<link href="style.css" rel="stylesheet" type="text/css" />
<link href="font.css" rel="stylesheet" type="text/css" />

</head>



<body text=" orange" background="student_images/frames-and-borders-free.jpg" style=" background-size:cover">

<center>

<div class="admin_page" style="margin-top:100px">

<?php
session_start();

include("dbconnect.php");
$db_found = mysql_select_db('infoproject');
if ($db_found){
	
		

echo "<form action='logme.php' method='POST'>";
echo "<center><table><tr>";
echo "<h2> Login Page   </h2>";
echo "<tr><td>Username</td><td><input type='text' name='uname'></td></tr>";
echo "<tr><td>Password</td><td><input type='password' name='upass'></td></tr>";

echo "<td><input type='submit' value='Submit' class='btn'  name='log'></td>
      <td><input type='reset' name='Cancel' class='btn' ></td>";
echo "</tr></table>";
echo "</form>";
?>


<?php

}

else{
	include("dbase.php");
	
}

?>


</div>

</center>

</body>


</html>