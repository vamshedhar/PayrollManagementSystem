<?php 

include("dbconnect.php"); 
include("check.php");
?>
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
    	<td class="big" align="left">Edit employee details</td>
    </tr>
    <tr><td class="normal" colspan="2" align="center"><hr align="center" width="98%" color="#666666" noshade="noshade" size="2" /></td></tr>
    <tr>
    	<td width="45%">
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
            	<td class="normal"><input type="text" size="25" maxlength="40" class="normal" name="emp_bankacno" value="<?php echo($emp_array['emp_bankacno']); ?>"/></td>
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
        <td class="normal" width="55%">
        
        
        <table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="40%">Date Of Birth</td>
            	<td class="normal" width="60%">
                <?php 
				$date_birth = $emp_array['date_birth'];
				$y1 = substr($date_birth,0,4);
				$m1 = substr($date_birth,5,2);
				$d1 = substr($date_birth,8,2);
				?>
                
                <input name="y1" type="text" class="normal" size="4" maxlength="4" value="<?php echo($y1); ?>" />/<input name="m1" type="text" class="normal" size="2" maxlength="2" value="<?php echo($m1); ?>" />/<input name="d1" type="text" class="normal" size="2" maxlength="2" value="<?php echo($d1); ?>" />
                
                </td>
            </tr>
            <tr>
            	<td class="normal">Date of Appointment</td>
            	<td class="normal">
                
                <?php 
				$date_appoint = $emp_array['date_appoint'];
				$y2 = substr($date_appoint,0,4);
				$m2 = substr($date_appoint,5,2);
				$d2 = substr($date_appoint,8,2);
				?>
                
                <input name="y2" type="text" class="normal" size="4" maxlength="4" value="<?php echo($y2); ?>" />/<input name="m2" type="text" class="normal" size="2" maxlength="2" value="<?php echo($m2); ?>" />/<input name="d2" type="text" class="normal" size="2" maxlength="2" value="<?php echo($d2); ?>" />
                </td>
            </tr>
            <tr>
            	<td class="normal">Joined In Scheme (GIS)</td>
            	<td class="normal">
                <?php 
				$emp_jis = $emp_array['emp_jis'];
				$y3 = substr($emp_jis,0,4);
				$m3 = substr($emp_jis,5,2);
				$d3 = substr($emp_jis,8,2);
				?>
                
                <input name="y3" type="text" class="normal" size="4" maxlength="4" value="<?php echo($y3); ?>" />/<input name="m3" type="text" class="normal" size="2" maxlength="2" value="<?php echo($m3); ?>" />/<input name="d3" type="text" class="normal" size="2" maxlength="2" value="<?php echo($d3); ?>" />
                
                
                
                </td>
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
                    <option value="F" <?php if ($emp_array['emp_category']=="F"){echo("selected=\"selected\" ");} ?> />Class F </option>
                    <option value="G" <?php if ($emp_array['emp_category']=="G"){echo("selected=\"selected\" ");} ?> /> Class G </option>
                    <option value="H" <?php if ($emp_array['emp_category']=="H"){echo("selected=\"selected\" ");} ?> /> Class H </option>                    
                </select>
            	</td>
            </tr>
            <tr>
            	<td class="normal">Residing Status</td>
            	<td class="normal">
                <select name="res_status">
                	<option value="residing" <?php if ($emp_array['res_status']=="residing"){echo("selected=\"selected\" ");} ?> />Residing </option>
                    <option value="non-residing" <?php if ($emp_array['res_status']=="non-residing"){echo("selected=\"selected\" ");} ?>/>Non - Residing</option>
                </select>
                </td>
            </tr>
	    </table>
</td></tr>
<tr>
	<td class="normal" colspan="2" align="center"><hr align="center" width="98%" color="#666666" noshade="noshade" size="2" /></td>
</tr>
<tr>
	<td class="normal" colspan="2" align="center"><input type="hidden" name="hid" value="edit_employee" /><input type="submit" name="edit_employee" value="Submit" /></td>
</tr>
</table>
</form>
<?php include("i_footer.php"); ?>
</body>
</html>