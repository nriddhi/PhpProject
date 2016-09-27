<?php

$host = 'localhost';

$user = 'root';

$password = '';

$dbname = 'reglog';

$conn = mysqli_connect($host, $user, $password, $dbname);

if(!$conn)
{	
echo "Connection failed";		
}

?>
