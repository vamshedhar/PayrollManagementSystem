<?php 
/* Connecting to the database */
include("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>GIS Statement Report - Payroll Register IITR</title>
</head>
<body>
<?php
	if($_POST['hid'] == "gis"){
	$gis_query = "select * from accounts where month = '$_POST[month]' and year = '$_POST[year]'";
	}elseif($_POST['hid'] == "gis_class"){
	$gis_query = "select * from accounts where month = '$_POST[month]' and year = '$_POST[year]' and emp_category = '$_POST[emp_category]'";
	}
?>
<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
<tr>
<td>

<table width="800px" align="center" border="1" cellspacing="2" cellpadding="0">
<tr>
	<td class="big" align="center" colspan="12">IIT Roorkee Saharanpur Campus</td>
</tr>
<tr>
	<td class="big" align="center" colspan="12">GIS Statement Report</td> 
</tr>
<tr>
	<td class="big" align="center" colspan="12">For the month of <?php echo($_POST['month']); ?> / <?php echo($_POST['year']); ?></td> 
</tr>
<tr>
	<td class="tab_border" width="50px" align="center">S No</td>
    <td class="tab_border" width="100px" align="center">Employee No</td>
    <td class="tab_border" width="200px" align="center">Employee Name</td>
    <td class="tab_border" width="150px" align="center">Designation</td>
    <td class="tab_border" width="100px" align="center">Date Of Birth</td>
    <td class="tab_border" width="100px" align="center">Date Of Appointment</td>
    <td class="tab_border" width="100px" align="center">Joined in Scheme (GIS)</td>
	<td class="tab_border" width="100px" align="center">Basic Pay</td>
    <td class="tab_border" width="100px" align="center">Dearness Allowance</td>
    <td class="tab_border" width="100px" align="center">Other Allowance</td>
    <td class="tab_border" width="100px" align="center">Total Pay</td>
    <td class="tab_border" width="100px" align="center">GIS Contribution</td>
</tr>
<?php 
	$gis_result = mysql_query($gis_query);
	$i = 1;
	$grand_gis_tot = 0;
if($gis_array = mysql_fetch_array($gis_result))
{
		$emp_query = "select * from empdetails where emp_no = '$gis_array[emp_no]'";
		$emp_result = mysql_query($emp_query) or die(mysql_error());
		$emp_array = mysql_fetch_array($emp_result);	

		$other = $gis_array['other_allow'] +$gis_array['wash_allow'] + $gis_array['hra'] + $gis_array['tpt'];
		$grand_gis_tot += $gis_array['gis'];
?>
<tr>
	<td class="tab_border" align="center"><?php echo($i); ?></td>
    <td class="tab_border" align="center"><?php echo($gis_array['emp_no']); ?></td>
    <td class="tab_border" align="center"><?php echo($emp_array['emp_name']); ?></td>
    <td class="tab_border" align="center"><?php echo($emp_array['emp_desig']); ?></td>
    <td class="tab_border" align="center"><?php echo($emp_array['date_birth']); ?></td>
    <td class="tab_border" align="center"><?php echo($emp_array['date_appoint']); ?></td>
    <td class="tab_border" align="center"><?php echo($emp_array['emp_jis']); ?></td>
	<td class="tab_border" align="right"><?php echo($gis_array['basic_pay']); ?></td>
    <td class="tab_border" align="right"><?php echo($gis_array['da']); ?></td>
    <td class="tab_border" align="right"><?php echo($other); ?></td>
    <td class="tab_border" align="right"><?php echo($gis_array['gross_salary']); ?></td>
    <td class="tab_border" align="right"><?php echo($gis_array['gis']); ?></td>
</tr>
<?php

	while($gis_array = mysql_fetch_array($gis_result)){
		$i++;
		$emp_query = "select * from empdetails where emp_no = '$gis_array[emp_no]'";
		$emp_result = mysql_query($emp_query) or die(mysql_error());
		$emp_array = mysql_fetch_array($emp_result);	

		$other = $gis_array['other_allow'] +$gis_array['wash_allow'] + $gis_array['hra'] + $gis_array['tpt'];
		$grand_gis_tot += $gis_array['gis'];
?>
<tr>
	<td class="tab_border" align="center"><?php echo($i); ?></td>
    <td class="tab_border" align="center"><?php echo($gis_array['emp_no']); ?></td>
    <td class="tab_border" align="center"><?php echo($emp_array['emp_name']); ?></td>
    <td class="tab_border" align="center"><?php echo($emp_array['emp_desig']); ?></td>
    <td class="tab_border" align="center"><?php echo($emp_array['date_birth']); ?></td>
    <td class="tab_border" align="center"><?php echo($emp_array['date_appoint']); ?></td>
    <td class="tab_border" align="center"><?php echo($emp_array['emp_jis']); ?></td>
	<td class="tab_border" align="right"><?php echo($gis_array['basic_pay']); ?></td>
    <td class="tab_border" align="right"><?php echo($gis_array['da']); ?></td>
    <td class="tab_border" align="right"><?php echo($other); ?></td>
    <td class="tab_border" align="right"><?php echo($gis_array['gross_salary']); ?></td>
    <td class="tab_border" align="right"><?php echo($gis_array['gis']); ?></td>
</tr>
<?php }}
else { ?>
<tr>
	<td class="tab_border" align="center"></td>
    <td class="tab_border" align="center">N</td>
    <td class="tab_border" align="center">O</td>
    <td class="tab_border" align="center">-</td>
    <td class="tab_border" align="center">-</td>
    <td class="tab_border" align="center">V</td>
    <td class="tab_border" align="center">A</td>
    <td class="tab_border" align="center">L</td>
    <td class="tab_border" align="center">U</td>
	<td class="tab_border" align="center">E</td>
    <td class="tab_border" align="center">S</td>
    <td class="tab_border" align="center"></td>
    </tr>
<?php }
 ?>
<tr>
	<td class="tab_border" colspan="11" align="right">Grand Total</td>
    <td class="tab_border" align="right"><?php echo($grand_gis_tot); ?></td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
