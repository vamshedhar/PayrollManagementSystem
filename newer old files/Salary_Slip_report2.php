<?php 
/* Connecting to the database */
include("dbconnect.php");

/* This query generates the personal details to be used for employee identification */
$emp_query = "select * from empdetails where emp_no = '$_GET[emp_no]'";
$emp_result = mysql_query($emp_query) or die(mysql_error());
$emp_array = mysql_fetch_array($emp_result);

/* This query generates the accounts to be used for employee's salary bill */
$acc_query = "select * from accounts where emp_no = '$_GET[emp_no]'";
$acc_result = mysql_query($acc_query);
$acc_array = mysql_fetch_array($acc_result);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Form</title>
</head>
<body>
<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
<tr>
<td>

<table width="1000px" cellpadding="2" cellspacing="2" border="0" align="center">
	<tr>
    	<td class="normal" width="50%">
		<table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="50%">Name</td>
				<td class="normal" width="50%"><?php echo($emp_array['emp_name']); ?></td>
            </tr>
			<tr>
            	<td class="normal">Designation</td>
            	<td class="normal"><?php echo($emp_array['emp_desig']); ?></td>
            </tr>
            <tr>
            	<td class="normal">Employee No. </td>
            	<td class="normal"><?php echo($emp_array['emp_no']); ?></td>
            </tr>
            <tr>
            	<td class="normal">Bank Account No.</td>
            	<td class="normal"><?php echo($emp_array['emp_bankacno']); ?></td>
            </tr>
        </table>
        </td>
        <td class="normal" width="50%">
        
        
        <table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="40%">Date Of Joining</td>
            	<td class="normal" width="60%"><?php echo($emp_array['date_join']); ?></td>
            </tr>
            <tr>
            	<td class="normal">Date Of Birth</td>
            	<td class="normal"><?php echo($emp_array['date _birth']); ?></td>
            </tr>
            <tr>
            	<td class="normal">Joined In Scheme</td>
            	<td class="normal"><?php echo($emp_array['emp_jis']); ?></td>
            </tr>
            <tr>
            	<td class="normal">Date of Appointment</td>
                <td class="normal"> add in the query</td>
            </tr>
	    </table>
        </td>
	</tr>
</table>
            
            
            
            <hr /> <!-- The END OF ONE SET OF VALUES -->
            
        <table width="1000px" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
    			<td class="normal" align="center" colspan="2">PAY AND ALLOWANCES</td>
                <td width="2%" rowspan="20"></td>
        		<td class="normal" align="center" colspan="5">DEDUCTIONS</td>
    		</tr>
            <tr>
        	    <td class="normal" width="16%">Basic Pay</td>
            	<td class="normal" width="16%"><?php echo($acc_array['basic_pay']); ?></td>
                <td class="normal" width="16%">GPF</td>
                <td class="normal" width="16%"><?php echo($acc_array['gpf']); ?></td>
                <td width="2%" rowspan="20"></td>
                <td class="normal" width="16%">Bank Loan</td>
                <td class="normal" width="16%"><?php echo($acc_array['bank_loan']); ?></td>
            </tr>
            <tr>
            	<td class="normal">Grade Pay (Dearness Pay)</td>
            	<td class="normal"><?php echo($acc_array['grade']); ?></td>
                <td class="normal">GPF Loan</td>
            	<td class="normal"><?php echo($acc_array['gpfloan']); ?></td>
                <td class="normal">Telephone Bill</td>
                <td class="normal"><?php echo($acc_array['telephone']); ?></td>
            </tr>
            <tr>
            	<td class="normal">Personal Pay</td>
            	<td class="normal"><?php echo($acc_array['personal_pay']); ?></td>
                <td class="normal">NPS</td>
                <td class="normal"><?php echo($acc_array['nps']); ?></td>
                <td class="normal">House Loan</td>
                <td class="normal"><?php echo($acc_array['h_loan']); ?></td>
            </tr>
            <tr>
            	<td class="normal">Other Allowance</td>
            	<td class="normal"><?php echo($acc_array['other_allow']); ?></td>
                <td class="normal">NPS Loan</td>
                <td class="normal"><?php echo($acc_array['npsloan']); ?></td>
                <td class="normal">Computer Loan</td>
                <td class="normal"><?php echo($acc_array['c_loan']); ?></td>
            </tr>
            <tr>
            	<td class="normal">Washing Allowance</td>
            	<td class="normal"><?php echo($acc_array['wash_allow']); ?></td>
                <td class="normal">L.I.C. SRE.</td>
                <td class="normal"><?php echo($acc_array['lic']); ?></td>
                <td class="normal">House Rent</td>
                <td class="normal"><?php echo($acc_array['h_rent']); ?></td>
            </tr>
            <tr>
            	<td class="normal">Conveyance Allowance</td>
            	<td class="normal"><?php echo($acc_array['convey_allow']); ?></td>
                <td class="normal">RDS</td>
                <td class="normal"><?php echo($acc_array['rds']); ?></td>
                <td class="normal">Garage Rent</td>
                <td class="normal"><?php echo($acc_array['g_rent']); ?></td>
            </tr>
            <tr>
            	<td class="normal">TPT. Allowance</td>
            	<td class="normal"><?php echo($acc_array['tpt']); ?></td>
                <td class="normal">GIS</td>
                <td class="normal"><?php echo($acc_array['gis']); ?></td>
                <td class="normal">Electricity</td>
                <td class="normal"><?php echo($acc_array['electricity']); ?></td>
            </tr>
            <tr>
            	<td class="normal">Lib. Incentive</td>
            	<td class="normal"><?php echo($acc_array['lib_incen']); ?></td>
                <td class="normal">Association</td>
                <td class="normal"><?php echo($acc_array['association']); ?></td>
                <td class="normal">Water Charges</td>
                <td class="normal"><?php echo($acc_array['w_charge']); ?></td>
            </tr>
            <tr>
            	<td class="normal">Int. Relief</td>
            	<td class="normal"><?php echo($acc_array['relief']); ?></td>
                <td class="normal">Misc Recovery</td>
                <td class="normal"><?php echo($acc_array['recovery']); ?></td>
                <td class="normal">Meter Rent</td>
                <td class="normal"><?php echo($acc_array['m_rent']); ?></td>
            </tr>
            <tr>
            	<td class="normal">Dearness Allowance</td> 
                <td class="normal"><?php $da = 0.35*($acc_array['basic_pay']+$acc_array['grade']);
					echo($da); ?></td>
                <td class="normal">Mandir</td>
                <td class="normal"><?php echo($acc_array['mandir']); ?></td>
                <td class="normal">Furniture Rent</td>
                <td class="normal"><?php echo($acc_array['f_rent']); ?></td>
            </tr>
            <tr>
            	<td class="normal">HRA</td>
                <td class="normal"> <?php $hra = 0.1*($acc_array['basic_pay']+$acc_array['grade']);
					echo($hra); ?></td>
                <td class="normal">Vehicle Bill</td>
                <td class="normal"><?php echo($acc_array['vbill']); ?></td>
                <td class="normal">Income Tax</td>
                <td class="normal"><?php echo($acc_array['i_tax']); ?></td>
            </tr>
            <tr>
            	<td class="normal">NPS</td>
                <td class="normal">Calculated but not to be added here</td>
                <td class="normal">Vehicle Advance</td>
                <td class="normal"><?php echo($acc_array['v_advance']); ?></td>
                <td class="normal">Rev. Stamp</td>
                <td class="normal"><?php echo($acc_array['r_stamp']); ?></td>
            </tr>
            <tr>
            	<td class="normal">&nbsp;</td>
                <td class="normal">&nbsp;</td>
                <td class="normal">Wheat Advance</td>
                <td class="normal"><?php echo($acc_array['w_advance']); ?></td>
                <td class="normal">Extra PF.  Subscription</td>
                <td class="normal"><?php echo($acc_array['e_pf_subs']); ?></td>
            </tr>
            <tr>
            	<td class="normal"></td>
                <td class="normal">&nbsp;</td>
                <td class="normal">Festival Advance</td>
                <td class="normal"><?php echo($acc_array['f_advance']); ?></td>
                <td class="normal">Misc Recovery</td>
                <td class="normal"><?php echo($acc_array['m_recovery']); ?></td>
            </tr>
            <tr>
            	<td class="normal">Net Payable Amount</td>
                <td class="normal">Grand Total of this column</td>
                <td class="normal" colspan="2">Net total deductions</td>
                <td class="normal" colspan="2">addition of these 2 columns</td>
            </tr>
            <tr>
            	<td class="normal"></td>
                <td class="normal"></td>
            	<td class="normal" colspan="3">Net Payment</td>
                <td class="normal" colspan="2">Net payable amount - net total deductions</td>
            </tr>
		</table>
</td>
</tr>
<tr>
	<td class="normal"><hr align="center" width="98%" color="#666666" noshade="noshade" size="2" /></td>
</tr>
</table>
</body>
</html>
