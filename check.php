<?php
session_start();

if(isset($_SESSION['username']) && isset($_COOKIE['payroll_use']))
{
if($_SESSION['username'] == $_COOKIE['payroll_use'])
{
	$checkuse = mysql_query("SELECT * FROM user WHERE username = '$_SESSION[username]'");
	$checkusearr = mysql_fetch_array($checkuse);
	if($_SESSION['post'] != $checkusearr['post'])
	{
		echo "<script type='text/javascript'>window.location = 'wrong.php'</script>";
		
	}
}
else
{
	echo "<script type='text/javascript'>window.location = 'wrong.php'</script>";	
}
}
else
{
 echo "<script type='text/javascript'>window.location = 'wrong.php'</script>";	
}
?>