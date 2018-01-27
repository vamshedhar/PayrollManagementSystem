<?php 
/* This page is used to update the salary of employees for previous months. It is a restricted page. */
/* Connecting to the database */
include("dbconnect.php");
include("check.php");

/*
if($_POST['month'] == "01"){
	$month = 12;
	$year = $_POST['year'] - 1;
}else{
	$year = $_POST['year'];
	switch($_POST['month']){
		case 02:
			$month = "01";
			break;
		case 03:
			$month = "02";
			break;
		case 04:
			$month = "03";
			break;
		case 05:
			$month = "04";
			break;
		case 06:
			$month = "05";
			break;
		case 07:
			$month = "06";
			break;
		case 08:
			$month = "07";
			break;
		case 09:
			$month = "08";
			break;
		case 10:
			$month = "09";
			break;
		case 11:
			$month = "10";
			break;
		case 12:
			$month = "11";
			break;
		default:
			$month = $_POST['month'];
			break;
		}	
}
*/

$month = $_POST['month'];
$year = $_POST['year'];
	
/* This query generates the personal details to be used for employee identification */
$emp_query = "select * from empdetails where emp_no = '$_POST[emp_no]'";
$emp_result = mysql_query($emp_query) or die(mysql_error());
$emp_array = mysql_fetch_array($emp_result);

/* This query generates the accounts to be used for employee's salary bill */
$acc_query = "select * from accounts where emp_no = '$_POST[emp_no]' and month = '$month' and year = '$year'";
$acc_result = mysql_query($acc_query);
$acc_query2 = "select * from accounts where emp_no = '$_POST[emp_no]' and month = '$_POST[month]' and year = '$_POST[year]'";
$acc_result2 = mysql_query($acc_query2);
$num = mysql_num_rows($acc_result2);
if($num == 0)
{
	echo "<script type='text/javascript'>window.location = 'error.php?id=1&err=doesnotexists';</script>";
	
}
$acc_array = mysql_fetch_array($acc_result);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Salary Form - Payroll Register IITR</title>
<!-- 
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }

</script> 
-->
</head>
<body>
<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
<form name="salary_update" method="post" enctype="multipart/form-data" target="_self" action="home.php">
<table width="1000px" cellpadding="2" cellspacing="2" border="0" align="center">
	<tr>
    	<td class="normal" width="50%">
		<table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="50%">Name</td>
				<td class="normal" width="50%"><input name="emp_name" readonly="readonly" type="text" class="normal" id="emp_name" value="<?php echo($emp_array['emp_name']); ?>" size="20" maxlength="40"/></td>
            </tr>
			<tr>
            	<td class="normal">Designation</td>
            	<td class="normal"><input name="emp_desig" readonly="readonly" type="text" class="normal" id="emp_desig" value="<?php echo($emp_array['emp_desig']); ?>" size="20" maxlength="40"/></td>
            </tr>
            <tr>
            	<td class="normal">Employee No. </td>
            	<td class="normal"><input name="emp_no" readonly="readonly" type="text" class="normal" id="emp_no" value="<?php echo($emp_array['emp_no']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal">Bank Account No.</td>
            	<td class="normal"><input name="emp_bankacno" readonly="readonly" type="text" class="normal" id="emp_bankacno" value="<?php echo $emp_array['emp_bankacno'] ; ?>" size="30" maxlength="40"/></td>
            </tr>
            <tr>
            	<td class="normal">Pension Scheme</td>
                <td class="normal"><input name="pen_sch" readonly="readonly" type="text" class="normal" value="<?php echo $emp_array['pen_sch'];?>" size="20" maxlength="40" /> 
                </td>
            </tr>
        </table>
        </td>
        <td class="normal" width="50%">
        
        
        <table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal">Date Of Birth</td>
            	<td class="normal"><input name="date_birth" readonly="readonly" type="text" class="normal" id="date_birth" value="<?php echo($emp_array['date_birth']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal">Date of Appointment</td>
                <td class="normal"><input name="date_appoint" readonly="readonly" type="text" class="normal" value="<?php echo($emp_array['date_appoint']); ?>" size="20" maxlength="40"/></td>
            </tr>
            <tr>
            	<td class="normal">Joined In Scheme (GIS)</td>
            	<td class="normal"><input name="emp_jis" type="text" readonly="readonly" class="normal" id="emp_jis" value="<?php echo($emp_array['emp_jis']); ?>" size="20" maxlength="40"/></td>
            </tr>
            <tr>
            	<td class="normal">Category</td>
            	<td class="normal"><input name="emp_category" readonly="readonly" type="text" class="normal" value="<?php echo($emp_array['emp_category']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal">Resident</td>
                <td class="normal"><input name="res_status" readonly="readonly" type="text" class="normal" value="<?php echo($emp_array['res_status']); ?>" size="20" maxlength="40" /></td>
            </tr>
	    </table>
        </td>
	</tr>
</table>
            
            
            
            <hr /> <!-- The END OF ONE SET OF VALUES -->
            
        <table width="1000px" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" colspan="8" align="center">Month <input type="text" name="month" readonly="readonly" size="2" maxlength="2" value="<?php echo($_POST['month']); ?>" />&nbsp;&nbsp;Year <input type="text" name="year" readonly="readonly" size="4" maxlength="4" value="<?php echo($_POST['year']); ?>" /></td>
            </tr>
            <tr>
    			<td class="normal" align="center" colspan="2">PAY AND ALLOWANCES</td>
                <td width="2%" rowspan="20"></td>
        		<td class="normal" align="center" colspan="5">DEDUCTIONS</td>
    		</tr>
            <tr>
        	    <td class="normal" width="16%">Basic Pay</td>
            	<td class="normal" width="16%"><input name="basic_pay" type="text" class="normal" id="basic_pay" value="<?php echo($acc_array['basic_pay']); ?>" size="20" maxlength="40" /></td>
                <td class="normal" width="16%">GPF</td>
                <td class="normal" width="16%"><input type="text" readonly="readonly" value="<?php echo($acc_array['gpf']); ?>" /></td>
                <td width="2%" rowspan="20"></td>
                <td class="normal" width="16%">Bank Loan</td>
                <td class="normal" width="16%"><input name="bank_loan" type="text" class="normal" id="bank_loan" value="<?php echo($acc_array['bank_loan']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal">Grade Pay(Dearness Pay)</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="grade_pay" value="<?php echo($acc_array['grade_pay']); ?>" /></td>
                <td class="normal">GPF Loan</td>
            	<td class="normal"><input name="gpfloan" type="text" class="normal" id="gpfloan" value="<?php echo($acc_array['gpfloan']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">Bank Name</td>
                <td class="normal"><input name="bank_name" type="text" class="normal" value="<?php echo($acc_array['bank_name']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal">Dearness Allowance</td> 
                <td class="normal"><input type="text" readonly="readonly" value="<?php echo($acc_array['da']); ?>" /></td>
                <td class="normal">NPS</td>
                <td class="normal"><input type="text" readonly="readonly" value="<?php echo($acc_array['nps']); ?>" /></td>
                <td class="normal">House Loan</td>
                <td class="normal"><input name="h_loan" type="text" class="normal" id="h_loan" value="<?php echo($acc_array['h_loan']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal">Personal Pay</td>
            	<td class="normal"><input name="personal_pay" type="text" class="normal" id="personal_pay" value="<?php echo($acc_array['personal_pay']); ?>" size="20" maxlength="40" /></td>
            	<td class="normal">NPS Loan</td>
                <td class="normal"><input name="npsloan" type="text" class="normal" id="npsloan" value="<?php echo($acc_array['npsloan']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">Computer Loan</td>
                <td class="normal"><input name="c_loan" type="text" class="normal" id="c_loan" value="<?php echo($acc_array['c_loan']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal">Washing Allowance</td>
            	<td class="normal"><input name="wash_allow" type="text" class="normal" id="wash_allow" value="<?php echo($acc_array['wash_allow']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">LIC Saharanpur</td>
                <td class="normal"><input name="lic" type="text" class="normal" id="lic" value="<?php echo($acc_array['lic']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">House Rent</td>
                <td class="normal"><input name="h_rent" type="text" class="normal" id="h_rent" value="<?php echo($acc_array['h_rent']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal">Conveyance Allowance</td>
            	<td class="normal"><input name="convey_allow" type="text" class="normal" id="convey_allow" value="<?php echo($acc_array['convey_allow']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">RDS</td>
                <td class="normal"><input name="rds" type="text" class="normal" id="rds" value="<?php echo($acc_array['rds']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">Garage Rent</td>
                <td class="normal"><input name="g_rent" type="text" class="normal" id="g_rent" value="<?php echo($acc_array['g_rent']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal">TPT Allowance</td>
            	<td class="normal"><input name="tpt" type="text" class="normal" id="tpt" value="<?php echo($acc_array['tpt']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">GIS</td>
                <td class="normal"><input name="gis" type="text" class="normal" id="gis" value="<?php echo($acc_array['gis']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">Electricity</td>
                <td class="normal"><input name="electricity" type="text" class="normal" id="electricity" value="<?php echo($acc_array['electricity']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal">Lib. Incentive</td>
            	<td class="normal"><input name="lib_incen" type="text" class="normal" id="lib_incen" value="<?php echo($acc_array['lib_incen']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">Association</td>
                <td class="normal"><input name="association" type="text" class="normal" id="association" value="<?php echo($acc_array['association']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">Water Charges</td>
                <td class="normal"><input name="w_charge" type="text" class="normal" id="w_charge" value="<?php echo($acc_array['w_charge']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal">Int. Relief</td>
            	<td class="normal"><input name="relief" type="text" class="normal" id="relief" value="<?php echo($acc_array['relief']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">Misc Recovery</td>
                <td class="normal"><input name="recovery" type="text" class="normal" id="recovery" value="<?php echo($acc_array['recovery']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">Meter Rent</td>
                <td class="normal"><input name="m_rent" type="text" class="normal" id="m_rent" value="<?php echo($acc_array['m_rent']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal">Other Allowance</td>
            	<td class="normal"><input name="other_allow" type="text" class="normal" id="other_allow" value="<?php echo($acc_array['other_allow']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">Mandir</td>
                <td class="normal"><input name="mandir" type="text" class="normal" id="mandir" value="<?php echo($acc_array['mandir']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">Furniture Rent</td>
                <td class="normal"><input name="f_rent" type="text" class="normal" id="f_rent" value="<?php echo($acc_array['f_rent']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal">HRA</td>
                <td class="normal"><input readonly="readonly" type="text" value="<?php echo $acc_array['hra'];?>" /></td>
                <td class="normal">Vehicle Bill</td>
                <td class="normal"><input name="vbill" type="text" class="normal" id="vbill" value="<?php echo($acc_array['vbill']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">Income Tax</td>
                <td class="normal"><input name="i_tax" type="text" class="normal" id="i_tax" value="<?php echo($acc_array['i_tax']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal">Supplementary Allowance</td>
                <td class="normal"><input type="text" class="normal" value="<?php echo $acc_array['supp_allow'] ?>" size="20" maxlength="40" /></td>
                <td class="normal">Vehicle Advance</td>
                <td class="normal"><input name="v_advance" type="text" class="normal" id="v_advance" value="<?php echo($acc_array['v_advance']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">Rev. Stamp</td>
                <td class="normal"><input name="r_stamp" type="text" class="normal" id="r_stamp" value="<?php echo($acc_array['r_stamp']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal">PF IIT Contribution</td>
                <td class="normal"><input type="text" readonly="readonly" value="<?php echo $acc_array['pf_contri'] ?>" /></td>
                <td class="normal">Wheat Advance</td>
                <td class="normal"><input name="w_advance" type="text" class="normal" id="w_advance" value="<?php echo($acc_array['w_advance']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">Extra PF Subscription</td>
                <td class="normal"><input name="e_pf_subs" type="text" class="normal" id="e_pf_subs" value="<?php echo($acc_array['e_pf_subs']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal"></td>
                <td class="normal">&nbsp;</td>
                <td class="normal">Festival Advance</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="f_advance" id="f_advance" value="<?php echo($acc_array['f_advance']); ?>" /></td>
                <td class="normal">Telephone Bill</td>
                <td class="normal"><input name="telephone" type="text" class="normal" id="telephone"  value="<?php echo($acc_array['telephone']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal"></td>
                <td class="normal"></td>
                <td class="normal">Staff Club</td>
                <td class="normal"><input name="staff_club" type="text" class="normal" value="<?php echo($acc_array['staff_club']); ?>" size="20" maxlength="40" /></td>
                <td class="normal">Medicare</td>
                <td class="normal"><input name="medicare" type="text" class="normal" value="<?php echo($acc_array['medicare']); ?>" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal" align="center">Gross Salary</td>
                <td class="normal" align="right"><input type="text" readonly="readonly" value="<?php echo($acc_array['gross_salary']); ?>" /></td>
                <td class="normal" colspan="2" align="center">Total Deductions</td>
                <td class="normal" colspan="2" align="right"><input type="text" readonly="readonly" value="<?php echo($acc_array['total_dedn']); ?>" /></td>
            </tr>
            <tr>
            	<td class="normal"></td>
                <td class="normal"></td>
            	<td class="normal" colspan="3" align="center">Net Payment</td>
                <td class="normal" colspan="2" align="right"><input type="text" readonly="readonly" value="<?php echo($acc_array['net_pay']); ?>" /></td>
            </tr>
		</table>
<tr>
	<td class="normal"><hr align="center" width="98%" color="#666666" noshade="noshade" size="2" /></td>
</tr>
<tr>
	<td class="normal" align="center"><input name="sal_update" type="submit" class="normal" onclick="MM_validateForm('emp_name','','R','emp_desig','','R','emp_no','','RisNum','emp_bankacno','','R','date_join','','R','date_birth','','R','emp_jis','','R','basic_pay','','RisNum','gpf','','RisNum','bank_loan','','RisNum','gpfloan','','RisNum','telephone','','RisNum','personal_pay','','RisNum','nps','','RisNum','h_loan','','RisNum','other_allow','','RisNum','npsloan','','RisNum','c_loan','','RisNum','wash_allow','','RisNum','lic','','RisNum','h_rent','','RisNum','convey_allow','','RisNum','rds','','RisNum','g_rent','','RisNum','tpt','','RisNum','gis','','RisNum','electricity','','RisNum','lib_incen','','RisNum','association','','RisNum','w_charge','','RisNum','relief','','RisNum','recovery','','RisNum','m_rent','','RisNum','mandir','','RisNum','f_rent','','RisNum','vbill','','RisNum','i_tax','','RisNum','v_advance','','RisNum','r_stamp','','RisNum','w_advance','','RisNum','e_pf_subs','','RisNum','f_advance','','RisNum','m_recovery','','RisNum');return document.MM_returnValue" value="Submit" size="10" />
	<input type="hidden" value="salary_form_update" name="hid" /></td>
</tr>
	
</form>
</table>
</body>
</html>