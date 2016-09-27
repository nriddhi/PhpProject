
<html>
<header>

<link href="style.css" rel="stylesheet" type="text/css" />
<link href="font.css" rel="stylesheet" type="text/css" />

</header>


<body text=" orange" background="student_images/frames-and-borders-free.jpg" style=" background-size:cover">

<center>

<?php

    
    
echo "<form class='add_new_student' action=add-student.php method=POST>";

echo "<center><table>";
echo  "<TR><TD>ID Number</TD><TD><INPUT TYPE=text name='idnum' ></TD></TR>";
echo  "<TR><TD>Student Name</TD><TD><INPUT TYPE=text name='famname' ></TD></TR>";
echo  "<TR><TD>Batch</TD><TD><INPUT TYPE=text name='firstname' ></TD></TR>";
echo  "<TR><TD>Blood</TD><TD><INPUT TYPE=text name='midname' ></TD></TR>";
echo  "<TR><TD>CGPA</TD><TD><INPUT TYPE=text name='age' ></TD></TR>";




echo "<TR><TD><INPUT TYPE=submit value=Register></TD><TD><INPUT TYPE=reset value='Cancel'></TD></TR></table> </center> </form> ";

?> 

</center>

</body>
</html>
