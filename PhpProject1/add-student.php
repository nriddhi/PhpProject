<?php
$myidnum = $_POST['idnum'];
$myfamname = $_POST['famname'];
$myfirstname = $_POST['firstname'];
$mymidname = $_POST['midname'];
$myage = $_POST['age'];

 
if (empty($myidnum) || empty($myfamname) || empty($myfirstname) || empty($mymidname)) 

{
  echo "<script>alert('Empty fields not allowed')</script>";
  echo "<script>location.href='view-student.php'</script>";
  die();
}

$con=mysql_CONNECT('localhost','root','');

mysql_select_db("infoproject",$con);

$result= mysql_query("select * from student where (famname ='$myfamname' && firstname ='$myfirstname' && midname ='$mymidname') || (idnum=$myidnum)   ");
$rows=mysql_num_rows($result);

if ($rows>=1)
{
  echo "<script>alert(' Student ID or Student already exist.')</script>";
  echo "<script>location.href='view-student.php'</script>";
  die();

}


mysql_query("insert into student values('$myidnum','$myfamname','$myfirstname', '$mymidname', '$myage')");
echo "<script>alert('1 Record Successfully Added')</script>";
ECHO "<script>location.href='view-student.php'</script>";

?>