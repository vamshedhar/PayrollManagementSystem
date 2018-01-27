<?php 
/* Connecting to the database */
include("dbconnect.php");
include("check.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>NPS Statement Report - Payroll Register IITR</title>
</head>
<body>
<h2 align="center">IIT Roorkee Saharanpur Campus, Saharanpur | GPF Statement</h2>
<?php
	if($_POST['hid'] == "nps"){
	$nps_query = "select * from accounts where pen_sch = 'nps' and month = '$_POST[month]' and year = '$_POST[year]'";
	}elseif($_POST['hid'] == "nps_class"){
	$nps_query = "select * from accounts where pen_sch = 'nps' and month = '$_POST[month]' and year = '$_POST[year]' and emp_category = '$_POST[emp_category]'";
	}
?>
<table width="800px" id="print" align="center" border="0" cellspacing="2" cellpadding="0">
<tr>
	<td class="big" align="center" colspan="7">For the month of <?php echo($_POST['month']); ?> / <?php echo($_POST['year']); ?></td> 
</tr>
<tr>
	<td class="normal" width="50px" align="center">S No</td>
    <td class="normal" width="100px" align="center">Employee No</td>
    <td class="normal" width="200px" align="center">Employee Name</td>
    <td class="normal" width="150px" align="center">Designation</td>
    <td class="normal" width="100px" align="center">NPS Amount</td>
    <td class="normal" width="100px" align="center">NPS Loan</td>
    <td class="normal" width="100px" align="center">Total</td>
</tr>
<?php include("dbconnect.php"); ?>
<?php
	$nps_result = mysql_query($nps_query);
	$i = 0;
	$grand_nps_amt = 0;
	$grand_nps_loan = 0;
	$grand_nps_tot = 0;
	while($nps_array = mysql_fetch_array($nps_result)){
		$i++;
		
		$nps_amt = $nps_array['nps'] + $nps_array['e_pf_subs'];
		$nps_tot = $nps_amt + $nps_array['npsloan'];
		
		$grand_nps_amt += $nps_amt;
		$grand_nps_loan += $nps_array['npsloan'];
		$grand_nps_tot += $nps_tot;
?>
<tr>
	<td class="normal" align="center"><?php echo($i); ?></td>
    <td class="normal" align="center"><?php echo($nps_array['emp_no']); ?></td>
    <td class="normal" align="center"><?php echo($nps_array['emp_name']); ?></td>
    <td class="normal" align="center"><?php echo($nps_array['emp_desig']); ?></td>
    <td class="normal" align="right"><?php echo($nps_amt); ?></td>
    <td class="normal" align="right"><?php echo($nps_array['npsloan']); ?></td>
    <td class="normal" align="right"><?php echo($nps_tot); ?></td>
</tr>
<?php } ?>
<tr><td colspan="7"> <hr /></td></tr>
<tr>
	<td class="normal" colspan="4" align="center"><b>Grand Total</b></td>
    <td class="normal" align="right"><b><?php echo($grand_nps_amt.".00"); ?></b></td>
    <td class="normal" align="right"><b><?php echo($grand_nps_loan.".00"); ?></b></td>
    <td class="normal" align="right"><b><?php echo($grand_nps_tot.".00"); ?></b></td>
</tr>
</table>
</body></html>