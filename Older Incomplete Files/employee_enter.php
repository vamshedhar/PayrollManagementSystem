<?php include("dbconnect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Employee Details - Payroll Register IITR</title>
</head>

<body>
<?php include("i_header.php"); ?>
<?php
/* This query generates the personal details to be used for employee identification */
$emp_query = "select * from empdetails where emp_no = '$_POST[emp_no_hid]'";
$emp_result = mysql_query($emp_query) or die(mysql_error());
$emp_array = mysql_fetch_array($emp_result);
?>
<form name="employee_edit" method="post" action="home.php" enctype="multipart/form-data" target="_self">
<table width="800px" cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
    	<td width="50%">
		<table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="50%">Name</td>
				<td class="normal" width="50%"><input type="text" size="20" maxlength="40" class="normal" name="emp_name" value="<?php echo($emp_array['emp_name']); ?>"/></td>
            </tr>
			<tr>
            	<td class="normal">Designation</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="emp_desig" value="<?php echo($emp_array['emp_desig']); ?>"/></td>
            </tr>
            <tr>
            	<td class="normal">Employee No. </td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="emp_no" value="<?php echo($emp_array['emp_no']); ?>" /></td>
            </tr>
            <tr>
            	<td class="normal">Bank Account No.</td>
            	<td class="normal"><input type="text" size="30" maxlength="40" class="normal" name="emp_bankacno" value="<?php echo($emp_array['emp_bankacno']); ?>"/></td>
            </tr>
            <tr>
            	<td class="normal">Pension Scheme</td>
                <td>
                	<select name="pen_sch">
                    <option value="gpf" <?php if ($emp_array['pen_sch']=="gpf"){echo("selected=\"selected\" ");} ?>/> GPF</option>
            		<option value="nps" <?php if ($emp_array['pen_sch']=="nps"){echo("selected=\"selected\" ");} ?>/> NPS</option>
                    </select>
                </td>
            </tr>
        </table>
        </td>
        <td class="normal" width="50%">
        
        
        <table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="40%">Date Of Birth</td>
            	<td class="normal" width="60%"><input type="text" size="20" maxlength="40" class="normal" name="date_birth" value="<?php echo($emp_array['date_birth']); ?>" /></td>
            </tr>
            <tr>
            	<td class="normal">Date of Appointment</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="date_appoint" value="<?php echo($emp_array['date_appoint']); ?>" /></td>
            </tr>
            <tr>
            	<td class="normal">Joined In Scheme (GIS)</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="emp_jis" value="<?php echo($emp_array['emp_jis']); ?>"/></td>
            </tr>
            <tr>
            	<td class="normal">Category</td>
            	<td class="normal">
                <select name="emp_category">
                    <option value="A" <?php if ($emp_array['emp_category']=="A"){echo("selected=\"selected\" ");} ?> /> Class A </option>
                    <option value="B" <?php if ($emp_array['emp_category']=="B"){echo("selected=\"selected\" ");} ?> /> Class B </option>
                    <option value="C" <?php if ($emp_array['emp_category']=="C"){echo("selected=\"selected\" ");} ?> /> Class C </option>
                    <option value="D" <?php if ($emp_array['emp_category']=="D"){echo("selected=\"selected\" ");} ?> /> Class D </option>
                    <option value="E" <?php if ($emp_array['emp_category']=="E"){echo("selected=\"selected\" ");} ?> /> Class E </option>
		    </select>
			</td></tr></table>
		</td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="submit" class="normal" size="10" />
<input type="hidden" value="emp_form" name="hid" /> 
</td></tr></table></body></html>