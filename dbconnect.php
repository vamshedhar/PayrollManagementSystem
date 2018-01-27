<?php
$conn = @mysql_connect("localhost", "root", "");
if(!$conn){
	echo "<p>Unable to connect to the database server</p>";
	exit();
	}
$dbase = @mysql_select_db("project");
if(!$dbase){
	echo "<br />Unable to find the database: ". mysql_error();
	exit();
	}
?>
