<?php

$mykey1=$_REQUEST['key1'];


$con = mysql_connect("localhost","root","");

mysql_SELECT_DB("infoproject",$con);

$result=mysql_query("delete from student where idnum = '$mykey1'");
echo "<script>location.href='view-student.php'</script>"

?> 