<?php include("dbconnect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Home - Payroll Register IITR</title>
</head>
<body>
<?php include("i_header.php"); ?>
<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
<tr>
<td>

<?php

if($_GET['emp_no']!=0) 
{
	$t = time() + 3600;
	setcookie(emp_no, $_GET['emp_no'], $t);
	if($_GET['doer']=="view") 
	{
		include("form-display.php");
	}
	elseif($_GET['doer']=="report_gis")
	{	
		include("gis_statement_report.php");
	}
	elseif($_GET['doer']=="report_gpf")
	{	
		include("gpf_statement_report.php");
	}
	elseif($_GET['doer']=="report_nps")
	{	
		include("nps_statement_report.php");
	}
	elseif($_GET['doer']=="report_bank")
	{	
		include("bank_transfer_report.php");
	}
	elseif($_GET['doer']=="report_salaryslip")
	{	
		include("salary_slip_report.php");
	}
	elseif($_GET['doer']=="report_summary")
	{	
		include("summary.php");
	}
	elseif($_GET['doer']=="report_ledger")
	{	
		include("ledger_report.php");
	}
	elseif($_GET['doer']=="new_emp")
	{
		include("employee-enter.php");
	}
}
else
{ ?>
<form method="get" action="home.php" enctype="text/plain" >
Enter the Employee Number <input type="text" size="20" maxlength="40" class="normal" name="emp_no" />
<input type="radio" name="doer" value="view" />View file
<input type="radio" name="doer" value="new_emp" />New Employee
<input type="radio" name="doer" value="report_gis" /> GIS Statement
<input type="radio" name="doer" value="report_gpf" /> GPF Statement
<input type="radio" name="doer" value="report_nps" /> NPS Statement
<input type="radio" name="doer" value="report_bank" /> Bank Transfer Statement
<input type="radio" name="doer" value="report_salaryslip" /> Salary Slip
<input type="radio" name="doer" value="report_summary" /> Summary Of Pay Bill
<input type="radio" name="doer" value="report_ledger" /> Ledger 
<br \>
<center>
<input type="submit" size="10" class="normal" value="Submit" /></center></form>	
<?php }
?>
</td></tr>
</table>
<?php include("i_footer.php"); ?>
</body>
</html>