<?php
$mykey1=$_REQUEST['key1'];
$mykey2=$_REQUEST['key2'];
$mykey3=$_REQUEST['key3'];




echo "<form action='update-teacher.php?key1=" . $mykey1 . "'method='POST'>";


echo "<center><table>";

echo  "<TR><TD>Teacher Name</TD><TD><INPUT TYPE=text name='teachername' value=$mykey1></TD></TR>";
echo  "<TR><TD>Degree</TD><TD><INPUT TYPE=text name='degree' value=$mykey2 ></TD></TR>";
echo  "<TR><TD>Dept</TD><TD><INPUT TYPE=text name='univ' value=$mykey3 ></TD></TR>";


echo "<TR><TD>
<INPUT TYPE=submit value=UPDATE></TD><TD><INPUT TYPE=reset value='cancel'>
</TD></TR></table>";

?> 