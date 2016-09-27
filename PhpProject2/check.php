
<?php

session_start();

include'connection.php';

$user_check = $_SESSION['username'];

$ses_sql = mysqli_query($conn, "SELECT username FROM reglog WHERE username='$user_check'");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

$login_user = $row['username'];


?>
