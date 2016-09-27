<?php

$ourteachername = $_POST['teachername'];
$ourtdegree = $_POST['degree'];
$univname = $_POST['univ'];


 
if ( empty($ourteachername) || empty($ourtdegree) || empty($univname)) 

{
  echo "<script>alert('Empty fields not allowed')</script>";
  echo "<script>location.href='view-teacher.php'</script>";
  die();
}

$con=mysql_CONNECT('localhost','root','');

mysql_select_db("infoproject",$con);

$result1= mysql_query("select * from teacher where (teachername ='$ourteachername' && degree ='$ourtdegree' && univ ='$univname')    ");
$rows=mysql_num_rows($result1);

if ($rows>=1)
{
  echo "<script>alert(' Teacher ID or teacher already exist.')</script>";
  echo "<script>location.href='view-teacher.php'</script>";
  die();

}


mysql_query("insert into teacher values('$ourteachername','$ourtdegree', '$univname')");
echo "<script>alert('1 Record Successfully Added')</script>";
ECHO "<script>location.href='view-teacher.php'</script>";

?>