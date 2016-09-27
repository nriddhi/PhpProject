<?php
	mysql_connect("localhost", "root", "") or die(mysql_error());

	mysql_query("CREATE DATABASE infoproject") or die(mysql_error());

	mysql_select_db("infoproject") or die(mysql_error());

	mysql_query("CREATE TABLE user(username varchar(20), password varchar(20), level varchar(20))") or die(mysql_error());
	mysql_query("INSERT INTO user(username,password,level) VALUES('ict','12345','admin')") or die(mysql_error());	

	mysql_query("CREATE TABLE student(idnum int NOT NULL PRIMARY KEY , famname varchar(100), firstname varchar(100), midname varchar(100) , age int)") or die(mysql_error());
	
	mysql_query("CREATE TABLE teacher( teachername varchar(100), degree varchar(100), univ varchar(100) )") or die(mysql_error());
			
//	mysql_query("CREATE TABLE me(idnum int NOT NULL PRIMARY KEY , famname varchar(100), firstname varchar(100), midname varchar(100) )") or die(mysql_error());		
//	mysql_query("CREATE TABLE plus(idnum int NOT NULL PRIMARY KEY , famname varchar(100), firstname varchar(100), midname varchar(100) )") or die(mysql_error());		
		header("Location: index.php");
?>