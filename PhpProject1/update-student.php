<?php

$myidnum = $_POST['idnum'];
$myfamname = $_POST['famname'];
$myfirstname = $_POST['firstname'];
$mymidname = $_POST['midname'];
$myage = $_POST['age'];


$key1 = $_REQUEST['key1'];




$con=mysql_CONNECT('localhost','root','');

mysql_select_db("infoproject",$con);

mysql_query("update student set idnum='$myidnum', famname ='$myfamname', firstname='$myfirstname', midname='$mymidname', age='$myage' where idnum = '$key1'");



echo "<script>alert('Successfully Updated')</script>";
echo "<script>location.href='view-student.php'</script>";

?>