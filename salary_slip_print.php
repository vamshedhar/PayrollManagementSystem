<?php 
/* Connecting to the database */
include("dbconnect.php");
include("check.php");

if ($_POST['emp_category'] != NULL){
/* This query generates the accounts to be used for employee's salary bill */
$acc_query = "select * from accounts where emp_category = '$_POST[emp_category]' and month = '$_POST[month]' and year = '$_POST[year]'";
$acc_result = mysql_query($acc_query);
}



/*
elseif($_POST['emp_name'] != NULL){

$emp_query = "select * from empdetails where emp_name = '$_POST[emp_name]'";
$emp_result = mysql_query($emp_query) or die(mysql_error());
$emp_array = mysql_fetch_array($emp_result);

$acc_query = "select * from accounts where emp_name = '$_POST[emp_name]' and month = '$_POST[month]' and year = '$_POST[year]'";
$acc_result = mysql_query($acc_query) or die(mysql_error());
$acc_array = mysql_fetch_array($acc_result);
}

Query in case of emp_category
elseif($_POST['emp_category'] != NULL){

$emp_query = "select * from empdetails where emp_no = '$_POST[emp_category]'";
$emp_result = mysql_query($emp_query) or die(mysql_error());
$emp_array = mysql_fetch_array($emp_result);

$acc_query = "select * from accounts where emp_no = '$_POST[emp_category]' and month = '$_POST[month]' and year = '$_POST[year]'";
$acc_result = mysql_query($acc_query);
$acc_array = mysql_fetch_array($acc_result);
}
*/
else{
	die("Wrong Input. <a href = \"home.php\">Click here</a> to try again");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Salary Slip Statement - Payroll Register IITR</title>
</head>
<body>
<?php 
while($acc_array = mysql_fetch_array($acc_result))
{
$emp_query = "select * from empdetails where emp_no = '$acc_array[emp_no]'";
$emp_result = mysql_query($emp_query) or die(mysql_error());
$emp_array = mysql_fetch_array($emp_result);	

?>
<table width="1200px" cellpadding="0" cellspacing="0" border="0" align="center">
<tr><td><h3 align="center">IIT Roorkee Saharanpur Campus, Saharanpur | Salary Slip</h3></td></tr>

<tr>
<td><hr />
<table width="1200px">
	<tr>
        <td>EMP NO: <?php echo($emp_array['emp_no']); ?></td>
        <td>NAME: <?php echo($emp_array['emp_name']); ?></td>
        <td>DESIGN: <?php echo($emp_array['emp_desig']); ?></td>
        <td>SALARY FOR THE MONTH OF <?php echo($acc_array['month']."/".$acc_array['year']); ?></td>
        <td>BILL: <?php echo($emp_array['emp_category']); ?></td>
    </tr>
</table>
            <!-- The END OF ONE SET OF VALUES -->
<?php 
$grand_total = $acc_array['basic_pay'] + $acc_array['grade_pay'] + $acc_array['personal_pay'] + $acc_array['other_allow'] + $acc_array['wash_allow'] + $acc_array['convey_allow'] + $acc_array['tpt'] + $acc_array['lib_incen'] + $acc_array['relief'] + $acc_array['da'] + $acc_array['hra'] + $acc_array['supp_allow']; 

$tot_dedn = $acc_array['gpf'] + $acc_array['gpfloan'] + $acc_array['nps'] + $acc_array['npsloan'] + $acc_array['lic'] + $acc_array['rds'] + $acc_array['gis'] + $acc_array['association'] + $acc_array['recovery'] + $acc_array['mandir'] + $acc_array['vbill'] + $acc_array['v_advance'] + $acc_array['w_advance'] + $acc_array['f_advance'] + $acc_array['bank_loan'] + $acc_array['telephone'] + $acc_array['h_loan'] + $acc_array['c_loan'] + $acc_array['h_rent'] + $acc_array['g_rent'] + $acc_array['electricity'] + $acc_array['w_charge'] + $acc_array['m_rent'] + $acc_array['f_rent'] + $acc_array['i_tax'] + $acc_array['r_stamp'] + $acc_array['e_pf_subs'] + $acc_array['medicare']; 
?>            
        <table width="1200px" id="print" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
    			<td class="print" align="center" colspan="2">PAY AND ALLOWANCES</td>
                <td width="2%" rowspan="20"></td>
        		<td class="print" align="center" colspan="5">DEDUCTIONS</td>
    		</tr>
            <tr>
        	    <td class="print" width="16%">1).Basic Pay</td>
            	<td class="print" width="16%" align="right"><?php echo($acc_array['basic_pay']); ?></td>
                <td class="print" width="16%">1). GPF</td>
                <td class="print" width="16%" align="right"><?php echo($acc_array['gpf']); ?></td>
                <td width="2%" rowspan="20"></td>
                <td class="print" width="16%">15).Bank Loan</td>
                <td class="print" width="16%" align="right"><?php echo($acc_array['bank_loan']); ?></td>
            </tr>
            <tr>
            	<td class="print">2).Grade Pay</td>
            	<td class="print" align="right"><?php echo($acc_array['grade_pay']); ?></td>
                <td class="print">2).GPF Loan</td>
            	<td class="print" align="right"><?php echo($acc_array['gpfloan']); ?></td>
                <td class="print">16).Telephone Bill</td>
                <td class="print" align="right"><?php echo($acc_array['telephone']); ?></td>
            </tr>
            <tr>
            	<td class="print">3).Personal Pay</td>
            	<td class="print" align="right"><?php echo($acc_array['personal_pay']); ?></td>
                <td class="print">3).NPS</td>
                <td class="print" align="right"><?php echo($acc_array['nps']); ?></td>
                <td class="print">17).House Loan</td>
                <td class="print" align="right"><?php echo($acc_array['h_loan']); ?></td>
            </tr>
            <tr>
            	<td class="print">4).Other Allowance</td>
            	<td class="print" align="right"><?php echo($acc_array['other_allow']); ?></td>
                <td class="print">4).NPS Loan</td>
                <td class="print" align="right"><?php echo($acc_array['npsloan']); ?></td>
                <td class="print">18).Computer Loan</td>
                <td class="print" align="right"><?php echo($acc_array['c_loan']); ?></td>
            </tr>
            <tr>
            	<td class="print">5).Washing Allowance</td>
            	<td class="print" align="right"><?php echo($acc_array['wash_allow']); ?></td>
                <td class="print">5).LIC SRE</td>
                <td class="print" align="right"><?php echo($acc_array['lic']); ?></td>
                <td class="print">19).House Rent</td>
                <td class="print" align="right"><?php echo($acc_array['h_rent']); ?></td>
            </tr>
            <tr>
            	<td class="print">6).Conveyance Allowance</td>
            	<td class="print" align="right"><?php echo($acc_array['convey_allow']); ?></td>
                <td class="print">6).RDS</td>
                <td class="print" align="right"><?php echo($acc_array['rds']); ?></td>
                <td class="print">20).Garage Rent</td>
                <td class="print" align="right"><?php echo($acc_array['g_rent']); ?></td>
            </tr>
            <tr>
            	<td class="print">7).TPT. Allowance</td>
            	<td class="print" align="right"><?php echo($acc_array['tpt']); ?></td>
                <td class="print">7).GIS</td>
                <td class="print" align="right"><?php echo($acc_array['gis']); ?></td>
                <td class="print">21).Electricity</td>
                <td class="print" align="right"><?php echo($acc_array['electricity']); ?></td>
            </tr>
            <tr>
            	<td class="print">8).Lib. Incentive</td>
            	<td class="print" align="right"><?php echo($acc_array['lib_incen']); ?></td>
                <td class="print">8).Association</td>
                <td class="print" align="right"><?php echo($acc_array['association']); ?></td>
                <td class="print">22).Water Charges</td>
                <td class="print" align="right"><?php echo($acc_array['w_charge']); ?></td>
            </tr>
            <tr>
            	<td class="print">9).Int. Relief</td>
            	<td class="print" align="right"><?php echo($acc_array['relief']); ?></td>
                <td class="print">9).Misc Recovery</td>
                <td class="print" align="right"><?php echo($acc_array['recovery']); ?></td>
                <td class="print">23).Meter Rent</td>
                <td class="print" align="right"><?php echo($acc_array['m_rent']); ?></td>
            </tr>
            <tr>
            	<td class="print">10).Dearness Allowance</td> 
                <td class="print" align="right"><?php echo($acc_array['da']); ?></td>
                <td class="print">10).Mandir</td>
                <td class="print" align="right"><?php echo($acc_array['mandir']); ?></td>
                <td class="print">24).Furniture Rent</td>
                <td class="print" align="right"><?php echo($acc_array['f_rent']); ?></td>
            </tr>
            <tr>
            	<td class="print">11).HRA</td>
                <td class="print" align="right"> <?php echo($acc_array['hra']); ?></td>
                <td class="print">11).Vehicle Bill</td>
                <td class="print" align="right"><?php echo($acc_array['vbill']); ?></td>
                <td class="print">25).Income Tax</td>
                <td class="print" align="right"><?php echo($acc_array['i_tax']); ?></td>
            </tr>
            <tr>
            	<td class="print">12).Supplementary Allow</td>
                <td class="print" align="right"><?php echo($acc_array['supp_allow']) ;?>&nbsp;</td>
                <td class="print">12).Vehicle Advance</td>
                <td class="print" align="right"><?php echo($acc_array['v_advance']); ?></td>
                <td class="print">26).Rev. Stamp</td>
                <td class="print" align="right"><?php echo($acc_array['r_stamp']); ?></td>
            </tr>
            <tr>
            	<td class="print">13).PF IITR Contribution*</td>
                <td class="print" align="right"><?php echo($acc_array['nps']) ;?>&nbsp;</td>
                <td class="print">13).Wheat Advance</td>
                <td class="print" align="right"><?php echo($acc_array['w_advance']); ?></td>
                <td class="print">27).Extra PF.  Subscription</td>
                <td class="print" align="right"><?php echo($acc_array['e_pf_subs']); ?></td>
            </tr>
            <tr>
            	<td class="print">&nbsp;</td>
                <td class="print">&nbsp;</td>
                <td class="print">14).Festival Advance</td>
                <td class="print" align="right"><?php echo($acc_array['f_advance']); ?></td>
                <td class="print">28).Medicare</td>
                <td class="print" align="right"><?php echo($acc_array['medicare']); ?></td>
            </tr>
            <tr>
            	<td class="print">&nbsp;</td>
                <td class="print">&nbsp;</td>
                <td class="print"></td>
                <td class="print" align="right"></td>
                <td class="print">29). Staff Club</td>
                <td class="print" align="right"><?php echo($acc_array['staff_club']); ?></td>
            </tr>
            <tr>
            	<td class="print">Gross Salary</td><td align="right"><?php echo($grand_total.".00"); ?></td>
                <td class="print" colspan="2">&nbsp;</td>
                <td class="print">Net total deductions</td><td align="right"><?php echo($tot_dedn.".00");?></td>
            </tr>
            <tr>
            	<td class="print" colspan="2">* For information only.</td>
            	<td class="print" colspan="2" align="right">&nbsp;</td>
                <td class="print">Net Payment</td>
                <td align="right"><?php $net = $grand_total - $tot_dedn; echo($net.".00"); ?></td>
            </tr>
		</table>
    </td></tr>
<tr>
	<td class="print">&nbsp;<hr align="center" width="98%" color="#666666" noshade="noshade" size="2" /></td>
</tr>
<tr><td><table width="100%">
<tr>
	<td width="30%" align="center">Assistant</td>
	<td width="30%" align="center">Incharge A/C</td>
	<td width="30%" align="center">Asstt. Registrar</td>
</tr>
</table>
</td></tr>
</table>
<hr /> 
<?php }?>
</body>
</html>
