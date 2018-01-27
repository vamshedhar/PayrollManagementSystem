<?php 
/* Connecting to the database */
include("dbconnect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Report - Payroll Register IITR</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<?php
if($_GET['report'] == "salary_slip"){
	$rep_type = 1;
	$rep_name = "Salary Slip";
}elseif($_GET['report'] == "bank_transfer"){
	$rep_type = 2;
	$rep_name = "Bank Transfer";
}elseif($_GET['report'] == "gpf"){
	$rep_type = 3;
	$rep_name = "GPF Statement";
}elseif($_GET['report'] == "nps"){
	$rep_type = 4;
	$rep_name = "NPS Statement";
}elseif($_GET['report'] == "gis"){
	$rep_type = 5;
	$rep_name = "GIS Statement";
}elseif($_GET['report'] == "summary_pay_bill"){
	$rep_type = 6;
	$rep_name = "Pay Bill";
}elseif($_GET['report'] == "ledger"){
	$rep_type = 7;
	$rep_name = "Ledger";
	$rep_query = "select * from empdetails order by emp_no";
	$rep_result = mysql_query($rep_query);
}

?>
<body>
<?php include("i_header.php"); ?>
<table width="800px" align="center" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td class="big"><?php echo($rep_name); ?></td>
</tr>
<tr><td>
<table width="100%" align="center" cellpadding="2" cellspacing="0" border="0">
<?php if($rep_type == 1)
{ 
	$rep_query = "select * from empdetails"; //  order by emp_no 
	$rep_result = mysql_query($rep_query);
?>
<?php /* 
<tr>
<form name="salary_slip" action="salary_slip_print.php" enctype="multipart/form-data" method="post" target="_blank">
	<td width="40%" class="normal">Please select Employee No</td>
    <td width="15%" class="normal">
    	<select name="emp_no">
        <?php while($rep_array = mysql_fetch_array($rep_result))
		{ 
		?>
        	<option value="<?php echo($rep_array['emp_no']); ?>"><?php echo($rep_array['emp_no']); ?></option>
        <?php 
		} 
		?>
        </select>    </td>
    <td width="3%" class="normal">
    <select name="month" id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
    <td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="salary_emp_no" type="hidden" />
</form>
</tr>
<?php
	$rep_query = "select * from empdetails"; //  order by emp_no 
	$rep_result = mysql_query($rep_query);
?>
<tr>
<form name="salary_slip" action="salary_slip_print.php" enctype="multipart/form-data" method="post" target="_blank">
	<td class="normal">Please select Employee Name</td>
    <td class="normal">
    	<select name="emp_name">
        <?php 
		while($rep_array = mysql_fetch_array($rep_result))
		{ 
		?>
        	<option value="<?php echo($rep_array['emp_name']); ?>"><?php echo($rep_array['emp_name']); ?></option>
        <?php
		} 
		?>
        </select></td>
    <td width="3%" class="normal">
    <select name="month" id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="salary_emp_name" type="hidden" />
</form>
</tr>
*/ ?>
<tr><td colspan="5"><hr width="98%" noshade="noshade" color="#000000" align="center" /></td></tr>
<tr>
<form name="salary_slip" action="salary_slip_print.php" enctype="multipart/form-data" method="post" target="_blank">
	<td class="normal">Please select the Class for Print</td>
    <td class="normal">
        <select name="emp_category">
        	<option value="A">Class A</option>
            <option value="B">Class B</option>
            <option value="C">Class C</option>
            <option value="D">Class D</option>
            <option value="E">Class E</option>
            <option value="F">Class F</option>
            <option value="G">Class G</option>
            <option value="H">Class H</option>
        </select>
    </td>
    <td width="3%" class="normal">
    <select name="month" id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="salary_emp_name" type="hidden" />
    </form>
    </tr>
<?php 
} 

if($rep_type == 2)
{ 
	?>
<tr><td colspan="5"><hr width="98%" noshade="noshade" color="#000000" align="center" /></td></tr>
<tr>
<form name="bank_transfer" action="bank_transfer_report.php" enctype="multipart/form-data" method="post" target="_blank">
	<td width="40%" class="normal">Please select Month and Year</td>
    <td></td>
    <td width="3%" class="normal">
    <select name="month" id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="bank_transfer" type="hidden" />
</form>
</tr>

<tr><td colspan="5"><hr width="98%" noshade="noshade" color="#000000" align="center" /></td></tr>
<tr>
<form name="bank_transfer" action="bank_transfer_report.php" enctype="multipart/form-data" method="post" target="_blank">
	<td class="normal">Please select the Class</td>
    <td class="normal">
    	<select name="emp_category">
        	<option value="A">Class A</option>
            <option value="B">Class B</option>
            <option value="C">Class C</option>
            <option value="D">Class D</option>
            <option value="E">Class E</option>
            <option value="F">Class F</option>
            <option value="G">Class G</option>
            <option value="H">Class H</option>
        </select>    </td>
    <td width="3%" class="normal">
    <select name="month" id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="bank_transfer_class" type="hidden" />
</form>
</tr>
<?php } ?>

<?php if($rep_type == 3){ ?>
<tr><td colspan="5"><hr width="98%" noshade="noshade" color="#000000" align="center" /></td></tr>
<tr>
<form name="gpf" action="gpf_statement_report.php" enctype="multipart/form-data" method="post" target="_blank">
	<td width="40%" class="normal">Please select Month and Year</td>
    <td></td>
    <td width="3%" class="normal">
    <select name="month" id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="gpf" type="hidden" />
</form>
</tr>

<tr><td colspan="5"><hr width="98%" noshade="noshade" color="#000000" align="center" /></td></tr>
<tr>
<form name="gpf" action="gpf_statement_report.php" enctype="multipart/form-data" method="post" target="_blank">
	<td class="normal">Please select the Class</td>
    <td class="normal">
    	<select name="emp_category">
        	<option value="A">Class A</option>
            <option value="B">Class B</option>
            <option value="C">Class C</option>
            <option value="D">Class D</option>
            <option value="E">Class E</option>
            <option value="F">Class F</option>
            <option value="G">Class G</option>
            <option value="H">Class H</option>
        </select>    </td>
    <td width="3%" class="normal">
    <select name="month" id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="gpf_class" type="hidden" />
</form>
</tr>
<?php } ?>

<?php if($rep_type == 4){ ?>
<tr><td colspan="5"><hr width="98%" noshade="noshade" color="#000000" align="center" /></td></tr>
<tr>
<form name="nps" action="nps_statement_report.php" enctype="multipart/form-data" method="post" target="_blank">
	<td width="40%" class="normal">Please select Month and Year</td>
    <td></td>
    <td width="3%" class="normal">
    <select name="month" id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="nps" type="hidden" />
</form>
</tr>

<tr><td colspan="5"><hr width="98%" noshade="noshade" color="#000000" align="center" /></td></tr>
<tr>
<form name="nps" action="nps_statement_report.php" enctype="multipart/form-data" method="post" target="_blank">
	<td class="normal">Please select the Class</td>
    <td class="normal">
    	<select name="emp_category">
        	<option value="A">Class A</option>
            <option value="B">Class B</option>
            <option value="C">Class C</option>
            <option value="D">Class D</option>
            <option value="E">Class E</option>
            <option value="F">Class F</option>
            <option value="G">Class G</option>
            <option value="H">Class H</option>
        </select>    </td>
    <td width="3%" class="normal">
    <select name="month" id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="nps_class" type="hidden" />
</form>
</tr>
<?php } ?>

<?php if($rep_type == 5){ ?>
<tr><td colspan="5"><hr width="98%" noshade="noshade" color="#000000" align="center" /></td></tr>
<tr>
<form name="gis" action="gis_statement_report.php" enctype="multipart/form-data" method="post" target="_blank">
	<td width="40%" class="normal">Please select Month and Year</td>
    <td></td>
    <td width="3%" class="normal">
    <select name="month" id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="gis" type="hidden" />
</form>
</tr>

<tr><td colspan="5"><hr width="98%" noshade="noshade" color="#000000" align="center" /></td></tr>
<tr>
<form name="gis" action="gis_statement_report.php" enctype="multipart/form-data" method="post" target="_blank">
	<td class="normal">Please select the Class</td>
    <td class="normal">
    	<select name="emp_category">
        	<option value="A">Class A</option>
            <option value="B">Class B</option>
            <option value="C">Class C</option>
            <option value="D">Class D</option>
            <option value="E">Class E</option>
            <option value="F">Class F</option>
            <option value="G">Class G</option>
            <option value="H">Class H</option>
        </select>    </td>
    <td width="3%" class="normal">
    <select name="month" id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="gis_class" type="hidden" />
</form>
</tr>
<?php } ?>

<?php if($rep_type == 6){ ?>
<tr>
<form name="summary_pay_bill" action="summary_pay_bill.php" enctype="multipart/form-data" method="post" target="_blank">
	<td class="normal">Please select the Class</td>
    <td class="normal">
    	<select name="emp_category">
        	<option value="A">Class A</option>
            <option value="B">Class B</option>
            <option value="C">Class C</option>
            <option value="D">Class D</option>
            <option value="E">Class E</option>
            <option value="F">Class F</option>
            <option value="G">Class G</option>
            <option value="H">Class H</option>
        </select>    </td>
    <td width="3%" class="normal">
    <select name="month" id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="summary_pay_bill" type="hidden" />
</form>
</tr>
<?php } ?>

<?php if($rep_type == 7){ ?>
<tr>
<form name="ledger" action="ledger_report.php" enctype="multipart/form-data" method="post" target="_blank">
	<td class="normal">Please select the Group</td>
    <td class="normal">
    	<select name="emp_category">
        	<option value="A">Class A</option>
            <option value="B">Class B</option>
            <option value="C">Class C</option>
            <option value="D">Class D</option>
            <option value="E">Class E</option>
            <option value="F">Class F</option>
            <option value="G">Class G</option>
            <option value="H">Class H</option>
        </select>    </td>
    <td width="3%" class="normal">
    <select name="month" id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="ledger" type="hidden" />
</form>
</tr>
<?php } ?>
</table>
</td></tr>
</table>
<?php include("i_footer.php"); ?>
</body>
</html>
