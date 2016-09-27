
<html>
<header>

<link href="style.css" rel="stylesheet" type="text/css" />
<link href="font.css" rel="stylesheet" type="text/css" />

</header>


<body text=" orange" background="student_images/frames-and-borders-free.jpg" style=" background-size:cover">

<center>

<?php

    
    
echo "<form class='add_new_student' action=add-teacher.php method=POST>";

echo "<center><table>";


echo  "<TR><TD>Teacher Name</TD><TD><INPUT TYPE=text name='teachername' ></TD></TR>";
echo  "<TR><TD>Degree</TD><TD><INPUT TYPE=text name='degree' ></TD></TR>";
echo  "<TR><TD>University</TD><TD><INPUT TYPE=text name='univ' ></TD></TR>";


echo "<TR><TD><INPUT TYPE=submit value=Register></TD><TD><INPUT TYPE=reset value='Cancel'></TD></TR></table> </center> </form> ";

?> 

</center>

</body>
</html>
