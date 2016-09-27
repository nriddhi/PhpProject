<?php
$mykey1=$_REQUEST['key1'];
$mykey2=$_REQUEST['key2'];
$mykey3=$_REQUEST['key3'];
$mykey4=$_REQUEST['key4'];
$mykey5=$_REQUEST['key5'];



echo "<form action='update-student.php?key1=" . $mykey1 .  "'method='POST'>";


echo "<center><table>";
echo  "<TR><TD>Student ID</TD><TD><INPUT TYPE=text name='idnum' value=$mykey1></TD></TR>";
echo  "<TR><TD>Student Name</TD><TD><INPUT TYPE=text name='famname' value=$mykey2 ></TD></TR>";
echo  "<TR><TD>Batch</TD><TD><INPUT TYPE=text name='firstname' value=$mykey3 ></TD></TR>";
echo  "<TR><TD>Blood</TD><TD><INPUT TYPE=text name='midname'  value=$mykey4></TD></TR>";
echo  "<TR><TD>CGPA</TD><TD><INPUT TYPE=text name='age' value=$mykey5 ></TD></TR>";




echo "<TR><TD><INPUT TYPE=submit value=UPDATE></TD><TD><INPUT TYPE=reset value='cancel'></TD></TR></table>";

?> 