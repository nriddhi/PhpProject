<?php

$ourteachername = $_POST['teachername'];
$ourtdegree = $_POST['degree'];
$univname = $_POST['univ'];


$key1 = $_REQUEST['key1'];




$con=mysql_CONNECT('localhost','root','');

mysql_select_db("infoproject",$con);

mysql_query("update teacher set teachername='$ourteachername', degree ='$ourtdegree', univ='$univname' where teachername = '$key1'");



echo "<script>alert('Successfully Updated')</script>";
echo "<script>location.href='view-teacher.php'</script>";

?>