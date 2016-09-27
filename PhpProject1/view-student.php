
<html>

<header>

<link href="style.css" rel="stylesheet" type="text/css" />
<link href="font.css" rel="stylesheet" type="text/css" />

</header>

<body text=" orange" background="student_images/frames-and-borders-free.jpg" style=" background-size:cover; width:100%" >

<center>

<div class="home_header">




<ul>

<li> <a href="admin.php"> HOME  </a>  </li>
<li> <a href="add-new-student.php"> ADD NEW  </a>  </li>

<li> <form method = "post" action = "bs.php" id="site-searchform"> 
   <div style = 'z-index:1;'>
   
   <input type="text" id="searchid" style="margin-right:0px" name = "wala" value="name of student..." onBlur="if (this.value == '') { this.value= 'name of student...'; }" onFocus="if (this.value == 'name of student...') { this.value= ''; }"/>
   
 <input id="searchsubmit" value="Search" type="submit"> 
    	
    </div>
    
   </form>   </li>

</ul>


</div>

<?php


$con=mysql_connect("localhost","root","");


mysql_select_db("infoproject",$con);

$result= mysql_query ("select * from student");

echo "<br>";


while($row=mysql_fetch_array($result))

{

   echo "
   
   <div class='student_view'> 
   <ul>
   
   <li> Student ID = $row[0] </br> </li>
   <li> Student Name = $row[1] </li>  
   <li>  Batch = $row[2]  </li> 
   <li>  Blood = $row[3] </li>  
   <li>  CGPA = $row[4] </li>
   
   </ul>
  
   
   <div class='edit_delete'>
   <a href='delete-student.php?key1=" . $row[0] . "'>
   <img src='Delete.png'  alt='delete' />
   </a>
   
   <a href = 'edit-student.php?key1=" . $row[0] . "&key2=" . $row[1] . "&key3=" . $row[2] . "&key4=" . $row[3] . "&key5=" . $row[4].  "'>
   
   <img src='edit.png' />
   
   </a>
   
  </div>
   </div>
   
   " ;

}

?> 





</center>

</body>
</html>
