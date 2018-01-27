<?php 
/* Connecting to the database */
include("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Bank Transfer Report - Payroll Register IITR</title>
</head>
<body>
<h2 align="center"> Bank Transfer </h2> 
<table width="800px" align="center" border="1" cellspacing="2" cellpadding="0">
<tr>
	<td class="normal" width="50px" align="center">S No</td>
    <td class="normal" width="150px" align="center">Account No</td>
    <td class="normal" width="450px" align="center">Name</td>
    <td class="normal" width="150px" align="center">Amount to be credited</td>
</tr>
<?php include("dbconnect.php"); ?>
<?php
	if($_POST['hid'] == "bank_transfer"){
	$bank_query = "select * from accounts where emp_bankacno != 0 and month = '$_POST[month]' and year = '$_POST[year]'";
	}elseif($_POST['hid'] == "bank_transfer_class"){
	$bank_query = "select * from accounts where emp_bankacno != 0 and month = '$_POST[month]' and year = '$_POST[year]' and emp_category = '$_POST[emp_category]'";
	}
	$bank_result = mysql_query($bank_query) or die(mysql_error());
	$i = 0;
	$net_pay = 0;
	while($bank_array = mysql_fetch_array($bank_result)){
		$i++;
		$net_pay += $bank_array['net_pay'];
?>
<tr>
	<td class="normal" align="center"><?php echo($i); ?></td>
    <td class="normal" align="center"><?php echo($bank_array['emp_bankacno']); ?></td>
    <td class="normal" align="center"><?php echo($bank_array['emp_name']); ?></td>
    <td class="normal" align="center"><?php echo($bank_array['net_pay']); ?></td>
</tr>
<?php } ?>
<tr>
	<td></td>
    <td></td>
    <td class="normal" align="center">Grand Total</td>
	<td class="normal" align="right"><?php echo($net_pay); ?></td>
</tr>
</table>
</body></html>