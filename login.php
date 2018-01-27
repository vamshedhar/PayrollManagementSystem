<?php
	if($_POST['submit'] == "Login" && $_POST['hid'] == "login")
	{
		/* Connecting to the database */
		include("dbconnect.php");
		
		$login_query = "select * from user where username = '$_POST[username]'";
		$login_result = mysql_query($login_query);
		$login_array = mysql_fetch_array($login_result);
		
		if(!$login_array['username'])
		{
			die("Wrong username. <a href = \"index.php\">Click here</a> to try again");
		}
		
		if($_POST['password'] == $login_array['password'])
		{
			session_start();
			setcookie("payroll_use", $login_array['username'], time() + 36000);
			$_SESSION['username']=$login_array['username'];
			$_SESSION['post']=$login_array['post'];
			
			echo "<script type='text/javascript'>window.location = 'home.php';</script>";
			
		}
		else
		{ 
			die("Wrong password. <a href = \"index.php\">Click here</a> to try again");
		}
	}
	else
	{
	include("index.php");
	}
?>