<html>

<header>

<link href="style.css" rel="stylesheet" type="text/css" />
<link href="font.css" rel="stylesheet" type="text/css" />

</header>

<body text=" orange" background="student_images/frames-and-borders-free.jpg" style=" background-size:cover">

<center>

<div class="home_header">
<ul>

<li> <a href="admin.php"> HOME  </a>  </li>
<li> <a href="add-new-teacher.php"> ADD NEW  </a>  </li>

<li> <form method = "post" action = "bs-teacher.php" id="site-searchform"> 
   <div style = 'z-index:1;'>
   
   <input type="text" id="searchid" style="margin-right:0px" name = "wala" value="name of teacher..." onBlur="if (this.value == '') { this.value= 'name of teacher...'; }" onFocus="if (this.value == 'name of teacher...') { this.value= ''; }"/>
   
 <input id="searchsubmit" value="Search" type="submit"> 
    	
    </div>
    
   </form>   </li>

</ul>

</div>


<?php


$con=mysql_connect("localhost","root","");

mysql_select_db("infoproject",$con);

$result1= mysql_query ("select * from teacher");

echo "<br>";


while($row=mysql_fetch_array($result1))
{

   echo "<div class='student_view'> 
   <ul>
   
   <li> Teacher Name = $row[0] </li>  
   <li> Degree = $row[1]  </li> 
   <li>  Dept = $row[2] </li>  
  
   </ul>
   
   <div class='edit_delete'>
   <a href='delete-teacher.php?key1=" . $row[0] . "'><img src='Delete.png'  alt='delete'></a>
   
   <a href = 'edit-teacher.php?key1=" . $row[0] . "&key2=" . $row[1] . "&key3=" . $row[2] .  "'><img src='edit.png'></a>
   
   </div>
   
   </div>
   
   " ;

}

?> 


</center>

</body>
</html>
