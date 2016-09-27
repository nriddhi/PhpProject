<?php
include('db.php');

		$search = $_POST['wala'];
		$check = mysql_query("SELECT * FROM teacher WHERE teachername = '$search' || degree = '$search' || univ = '$search'");
		
		$check1 = mysql_num_rows($check);
			if ($check1 != 0) {
					while($asd = mysql_fetch_assoc( $check )){
					
			echo"<div style = 'top: 200; left: 150; position: absolute; z-index:1;'>";
						echo"<h1>Search results</h1>";
						echo "<table  border='1' cellpadding='0' cellspacing='0' style='border-color: black' width = '40%'>";		
				echo $asd['teachername']," ",$asd['degree'],","," ",$asd['univ'];
						echo "<br>";
						echo"</table>";
						echo"</div>";
			
						}
					}
			else{
			echo"<script>alert('Cannot find the specified student!..')</script>";
			ECHO "<script>location.href='view-teacher.php'</script>";
				}
			

?>