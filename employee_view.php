<?php 
include("dbconnect.php");
include("check.php");
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View Employee - Payroll Register IITR</title>
</head>

<body>
<?php include("i_header.php"); ?>

<?php if($_GET['emp_no'] != NULL){

/* This query generates the personal details to be used for employee identification */
$emp_query = "select * from empdetails where emp_no = '$_GET[emp_no]'";
$emp_result = mysql_query($emp_query) or die(mysql_error());
$emp_array = mysql_fetch_array($emp_result);
	
	
 ?>
<form name="employee_view" method="post" action="employee_edit.php" enctype="multipart/form-data" target="_self">
<table width="800px" cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
    	<td class="big" align="left">Details of employee</td>
    </tr>
    <tr><td class="normal" colspan="2" align="center"><hr align="center" width="98%" color="#666666" noshade="noshade" size="2" /></td></tr>
    <tr>
    	<td width="45%">
		<table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="50%">Name</td>
				<td class="normal" width="50%"><input type="text" readonly="readonly" size="20" maxlength="40" class="normal" name="emp_name" value="<?php echo($emp_array['emp_name']); ?>"/></td>
            </tr>
			<tr>
            	<td class="normal">Designation</td>
            	<td class="normal"><input type="text" readonly="readonly" size="20" maxlength="40" class="normal" name="emp_desig" value="<?php echo($emp_array['emp_desig']); ?>"/></td>
            </tr>
            <tr>
            	<td class="normal">Employee No. </td>
            	<td class="normal"><input type="text" readonly="readonly" size="20" maxlength="40" class="normal" name="emp_no" value="<?php echo($emp_array['emp_no']); ?>" /></td>
            </tr>
            <tr>
            	<td class="normal">Bank Account No.</td>
            	<td class="normal"><input type="text" readonly="readonly" size="25" maxlength="40" class="normal" name="emp_bankacno" value="<?php echo($emp_array['emp_bankacno']); ?>"/></td>
            </tr>
            <tr>
            	<td class="normal">Pension Scheme</td>
                <td>
                	<input type="text" readonly="readonly" name="pen_sch" value="<?php echo($emp_array['pen_sch']); ?>" />
                </td>
            </tr>
        </table>
        </td>
        
        
        <td width="55%">    
        <table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="40%">Date Of Birth</td>
            	<td class="normal" width="60%"><input type="text" readonly="readonly" size="20" maxlength="40" class="normal" name="date_birth" value="<?php echo($emp_array['date_birth']);?>" /></td>
            </tr>
            <tr>
            	<td class="normal">Date of Appointment</td>
            	<td class="normal"><input type="text" readonly="readonly" size="20" maxlength="40" class="normal" name="date_appoint" value="<?php echo($emp_array['date_appoint']); ?>" /></td>
            </tr>
            <tr>
            	<td class="normal">Joined In Scheme (GIS)</td>
            	<td class="normal"><input type="text" readonly="readonly" size="20" maxlength="40" class="normal" name="emp_jis" value="<?php echo($emp_array['emp_jis']); ?>"/></td>
            </tr>
            <tr>
            	<td class="normal">Category</td>
            	<td class="normal"><input type="text" readonly="readonly" name="emp_category" value="<?php echo($emp_array['emp_category']); ?>" /></td>
            </tr>
            <tr>
            	<td class="normal">Residing Status</td>
            	<td class="normal"><input type="text" readonly="readonly" name="res_status" value="<?php echo($emp_array['res_status']); ?>" /></td>
            </tr>
	    </table>
</td></tr>
<tr>
	<td class="normal" colspan="2" align="center"><hr align="center" width="98%" color="#666666" noshade="noshade" size="2" /></td>
</tr>
<tr>
	<td class="normal" colspan="2" align="center"><input type="submit" size="10" class="normal" name="submit" value="Edit" /><input type="hidden" name="emp_no_hid" value="<?php echo($emp_array['emp_no']); ?>" /></td>
</tr>
</table>
</form>


<?php }else{ ?>


	<table width="800px" cellpadding="0" cellspacing="0" border="0" align="center">
<?php
    $rep_query = "select * from empdetails"; /*  order by emp_no */
	$rep_result = mysql_query($rep_query);
?>
<tr>
<form name="employee_view" action="employee_view.php" enctype="multipart/form-data" method="get">
	<td width="40%" class="normal">Please select Employee No</td>
    <td width="15%" class="normal">
    	<select name="emp_no">
        <?php while($rep_array = mysql_fetch_array($rep_result)){ ?>
        	<option value="<?php echo($rep_array['emp_no']); ?>"><?php echo($rep_array['emp_no']."-".$rep_array['emp_name']); ?></option>
        <?php } ?>
        </select>
    </td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="emp_no" type="hidden" />
</form>
</tr>
<?php /*
<tr><td colspan="5"><hr width="98%" noshade="noshade" color="#000000" align="center" /></td></tr>

	$rep_query = "select * from empdetails";
	$rep_result = mysql_query($rep_query);
?>
<tr>
<form name="employee_view" action="employee_view.php" enctype="multipart/form-data" method="get">
	<td class="normal">Please select Employee Name</td>
    <td class="normal">
    	<select name="emp_name">
        <?php while($rep_array = mysql_fetch_array($rep_result)){ ?>
        	<option value="<?php echo($rep_array['emp_name']); ?>"><?php echo($rep_array['emp_name']); ?></option>
        <?php } ?>
        </select>
    </td>
    <td width="3%" class="normal"><input name="month" value="<?php echo(date("m")); ?>" type="text" size="2" maxlength="2" /></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="salary_emp_name" type="hidden" />
</form>
</tr>
<?php */ ?>
    </table>
<?php } ?>
<?php include("i_footer.php"); ?>
</body>
</html>