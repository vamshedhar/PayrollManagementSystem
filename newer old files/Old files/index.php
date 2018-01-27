<?php /* Create the option of choosing between GPF and NPS */ ?>
<?php 
/* Connecting to the database */
include("dbconnect.php");

/* This query generates the personal details to be used for employee identification */
$emp_query = "select * from empdetails where emp_no = '$_GET[emp_no]'";
$emp_result = mysql_query($emp_query) or die(mysql_error());
$emp_array = mysql_fetch_array($emp_result);

/* This query generates the accounts to be used for employee's salary bill */
$acc_query = "select * from accounts where emp_no = '$_GET[emp_no]'";
$acc_result = mysql_query($acc_query);
$acc_array = mysql_fetch_array($acc_result);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Form</title>
</head>
<body>
<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
<tr>
<td>
<?php
if($_GET['emp_no']!=0) 
{
	if($acc_array['lock']==0)
	{include("form.php");}
	elseif($acc_array['lock']==1)
	{include("form-display.php");}
}

else
	{echo "<form method=\"get\" action=\"index.php\" enctype=\"text/plain\" >
Enter the Employee Number <input type=\"text\" size=\"20\" maxlength=\"40\" class=\"normal\" name=\"emp_no\" />
<input type=\"submit\" size=\"10\" class=\"normal\" /></form>" ;}
?>

</table>
</body>
</html>
