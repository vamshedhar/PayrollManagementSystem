<?php 
/* Connecting to the database */
include("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>GPF Statement Report - Payroll Register IITR</title>
</head>
<body>
<?php
	if($_POST['hid'] == "gpf"){
	$gpf_query = "select * from accounts where pen_sch = 'gpf' and month = '$_POST[month]' and year = '$_POST[year]'";
	}elseif($_POST['hid'] == "gpf_class"){
	$gpf_query = "select * from accounts where pen_sch = 'gpf' and month = '$_POST[month]' and year = '$_POST[year]' and emp_category = '$_POST[emp_category]'";
	}
?>
<table width="800px" align="center" border="1" cellspacing="2" cellpadding="0">
<tr>
	<td class="big" align="center" colspan="7">IIT Roorkee Saharanpur Campus</td>
</tr>
<tr>
	<td class="big" align="center" colspan="7">GPF Statement Report</td> 
</tr>
<tr>
	<td class="big" align="center" colspan="7">For the month of <?php echo($_POST['month']); ?> / <?php echo($_POST['year']); ?></td> 
</tr>
<tr>
	<td class="normal" width="50px" align="center">S No</td>
    <td class="normal" width="100px" align="center">Employee No</td>
    <td class="normal" width="200px" align="center">Employee Name</td>
    <td class="normal" width="150px" align="center">Designation</td>
    <td class="normal" width="100px" align="center">GPF Amount</td>
    <td class="normal" width="100px" align="center">GPF Loan</td>
    <td class="normal" width="100px" align="center">Total</td>
</tr>
<?php
	$gpf_result = mysql_query($gpf_query);
	$i = 0;
	$grand_gpf_amt = 0;
	$grand_gpf_loan = 0;
	$grand_gpf_tot = 0;
	
	while($gpf_array = mysql_fetch_array($gpf_result)){
		$i++;
		$gpf_amt = $gpf_array['gpf'] + $gpf_array['e_pf_subs'];
		$gpf_tot = $gpf_amt + $gpf_array['gpfloan'];
		$grand_gpf_amt += $gpf_amt;
		$grand_gpf_loan += $gpf_array['gpfloan'];
		$grand_gpf_tot += $gpf_tot;
?>
<tr>
	<td class="normal" align="center"><?php echo($i); ?></td>
    <td class="normal" align="center"><?php echo($gpf_array['emp_no']); ?></td>
    <td class="normal" align="center"><?php echo($gpf_array['emp_name']); ?></td>
    <td class="normal" align="center"><?php echo($gpf_array['emp_desig']); ?></td>
    <td class="normal" align="right"><?php echo($gpf_amt); ?></td>
    <td class="normal" align="right"><?php echo($gpf_array['gpfloan']); ?></td>
    <td class="normal" align="right"><?php echo($gpf_tot); ?></td>
</tr>
<?php } ?>
<tr><td colspan="7"> <hr /></td></tr>
<tr>
	<td class="normal" colspan="4" align="center">Grand Total</td>
    <td class="normal" align="right"><?php echo($grand_gpf_amt); ?></td>
    <td class="normal" align="right"><?php echo($grand_gpf_loan); ?></td>
    <td class="normal" align="right"><?php echo($grand_gpf_tot); ?></td>
</tr>
</table>
</body>
</html>