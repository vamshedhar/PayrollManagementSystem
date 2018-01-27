<?php 
/* Connecting to the database */
include("dbconnect.php");
include("check.php");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Class - Payroll Register IITR</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php include("i_header.php"); ?>
<table width="800px" align="center" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td class="big" colspan="3">Class A</td>
</tr>
<?php
	$class_query = "select * from empdetails where emp_category = 'A'";
	$class_result = mysql_query($class_query);
	while($class_array = mysql_fetch_array($class_result))
	{
?>
<tr>
	<td width="10%" class="normal" align="center"><?php echo($class_array['emp_no']); ?></td>
    <td width="50%" class="normal" align="center"><?php echo($class_array['emp_name']); ?></td>
    <td></td>
</tr>
<?php } ?>
<tr><td colspan="3"><hr align="center" color="#000000" noshade="noshade" width="98%" /></td></tr>

<tr>
	<td class="big" colspan="3">Class B</td>
</tr>
<?php
	$class_query = "select * from empdetails where emp_category = 'B'";
	$class_result = mysql_query($class_query);
	while($class_array = mysql_fetch_array($class_result))
	{
?>
<tr>
	<td width="10%" class="normal" align="center"><?php echo($class_array['emp_no']); ?></td>
    <td width="50%" class="normal" align="center"><?php echo($class_array['emp_name']); ?></td>
    <td></td>
</tr>
<?php } ?>
<tr><td colspan="3"><hr align="center" color="#000000" noshade="noshade" width="98%" /></td></tr>

<tr>
	<td class="big" colspan="3">Class C</td>
</tr>
<?php
	$class_query = "select * from empdetails where emp_category = 'C'";
	$class_result = mysql_query($class_query);
	while($class_array = mysql_fetch_array($class_result))
	{
?>
<tr>
	<td width="10%" class="normal" align="center"><?php echo($class_array['emp_no']); ?></td>
    <td width="50%" class="normal" align="center"><?php echo($class_array['emp_name']); ?></td>
    <td></td>
</tr>
<?php } ?>
<tr><td colspan="3"><hr align="center" color="#000000" noshade="noshade" width="98%" /></td></tr>

<tr>
	<td class="big" colspan="3">Class D</td>
</tr>
<?php
	$class_query = "select * from empdetails where emp_category = 'D'";
	$class_result = mysql_query($class_query);
	while($class_array = mysql_fetch_array($class_result))
	{
?>
<tr>
	<td width="10%" class="normal" align="center"><?php echo($class_array['emp_no']); ?></td>
    <td width="50%" class="normal" align="center"><?php echo($class_array['emp_name']); ?></td>
    <td></td>
</tr>
<?php } ?>
<tr><td colspan="3"><hr align="center" color="#000000" noshade="noshade" width="98%" /></td></tr>

<tr>
	<td class="big" colspan="3">Class E</td>
</tr>
<?php
	$class_query = "select * from empdetails where emp_category = 'E'";
	$class_result = mysql_query($class_query);
	while($class_array = mysql_fetch_array($class_result))
	{
?>
<tr>
	<td width="10%" class="normal" align="center"><?php echo($class_array['emp_no']); ?></td>
    <td width="50%" class="normal" align="center"><?php echo($class_array['emp_name']); ?></td>
    <td></td>
</tr>
<?php } ?>
<tr><td colspan="3"><hr align="center" color="#000000" noshade="noshade" width="98%" /></td></tr>

<tr>
	<td class="big" colspan="3">Class F</td>
</tr>
<?php
	$class_query = "select * from empdetails where emp_category = 'F'";
	$class_result = mysql_query($class_query);
	while($class_array = mysql_fetch_array($class_result)){
?>
<tr>
	<td width="10%" class="normal" align="center"><?php echo($class_array['emp_no']); ?></td>
    <td width="50%" class="normal" align="center"><?php echo($class_array['emp_name']); ?></td>
    <td></td>
</tr>
<?php } ?>
<tr><td colspan="3"><hr align="center" color="#000000" noshade="noshade" width="98%" /></td></tr>

<tr>
	<td class="big" colspan="3">Class G (Pensioners)</td>
</tr>
<?php
	$class_query = "select * from empdetails where emp_category = 'G'";
	$class_result = mysql_query($class_query);
	while($class_array = mysql_fetch_array($class_result)){
?>
<tr>
	<td width="10%" class="normal" align="center"><?php echo($class_array['emp_no']); ?></td>
    <td width="50%" class="normal" align="center"><?php echo($class_array['emp_name']); ?></td>
    <td></td>
</tr>
<?php } ?>
<tr><td colspan="3"><hr align="center" color="#000000" noshade="noshade" width="98%" /></td></tr>

<tr>
	<td class="big" colspan="3">Class H (Pensioners)</td>
</tr>
<?php
	$class_query = "select * from empdetails where emp_category = 'H'";
	$class_result = mysql_query($class_query);
	while($class_array = mysql_fetch_array($class_result)){
?>
<tr>
	<td width="10%" class="normal" align="center"><?php echo($class_array['emp_no']); ?></td>
    <td width="50%" class="normal" align="center"><?php echo($class_array['emp_name']); ?></td>
    <td></td>
</tr>
<?php } ?>
</table>
<?php include("i_footer.php"); ?>
</body>
</html>
