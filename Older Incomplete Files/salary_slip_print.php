<?php 
/* Connecting to the database */
include("dbconnect.php");

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
<table width="2500" cellpadding="0" cellspacing="0" border="0" align="center">
<tr><td><h2 align="center">  Salary Slip          IIT Roorkee  </h2></td></tr><tr>
<td>
<hr />
<table width="2500">
	<tr>
        <td>EMP NO: <?php echo($emp_array['emp_no']); ?></td>
        <td>NAME: <?php echo($emp_array['emp_name']); ?></td>
        <td>DESIGN: <?php echo($emp_array['emp_desig']); ?></td>
        <td>SALARY FOR THE MONTH OF <?php echo($acc_array['month']."/".$acc_array['year']); ?></td>
        <td>CLASS: <?php echo($emp_array['emp_category']); ?></td>
    </tr>
</table>
<hr /> 
            <!-- The END OF ONE SET OF VALUES -->
<?php 
$grand_total = $acc_array['basic_pay'] + $acc_array['grade_pay'] + $acc_array['personal_pay'] + $acc_array['other_allow'] + $acc_array['wash_allow'] + $acc_array['convey_allow'] + $acc_array['tpt'] + $acc_array['lib_incen'] + $acc_array['relief'] + $acc_array['da'] + $acc_array['hra'] + $acc_array['supp_allow']; 

$tot_dedn = $acc_array['gpf'] + $acc_array['gpfloan'] + $acc_array['nps'] + $acc_array['npsloan'] + $acc_array['lic'] + $acc_array['rds'] + $acc_array['gis'] + $acc_array['association'] + $acc_array['recovery'] + $acc_array['mandir'] + $acc_array['vbill'] + $acc_array['v_advance'] + $acc_array['w_advance'] + $acc_array['f_advance'] + $acc_array['bank_loan'] + $acc_array['telephone'] + $acc_array['h_loan'] + $acc_array['c_loan'] + $acc_array['h_rent'] + $acc_array['g_rent'] + $acc_array['electricity'] + $acc_array['w_charge'] + $acc_array['m_rent'] + $acc_array['f_rent'] + $acc_array['i_tax'] + $acc_array['r_stamp'] + $acc_array['e_pf_subs'] + $acc_array['medicare']; 
?>            
        <table width="2500" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
    			<td class="normal" align="center" colspan="2">PAY AND ALLOWANCES</td>
                <td width="2%" rowspan="20"></td>
        		<td class="normal" align="center" colspan="5">DEDUCTIONS</td>
    		</tr>
            <tr>
        	    <td class="normal" width="16%">1).Basic Pay</td>
            	<td class="normal" width="16%" align="right"><?php echo($acc_array['basic_pay']); ?></td>
                <td class="normal" width="16%">1). GPF</td>
                <td class="normal" width="16%" align="right"><?php echo($acc_array['gpf']); ?></td>
                <td width="2%" rowspan="20"></td>
                <td class="normal" width="16%">15).Bank Loan</td>
                <td class="normal" width="16%" align="right"><?php echo($acc_array['bank_loan']); ?></td>
            </tr>
            <tr>
            	<td class="normal">2).Grade Pay</td>
            	<td class="normal" align="right"><?php echo($acc_array['grade_pay']); ?></td>
                <td class="normal">2).GPF Loan</td>
            	<td class="normal" align="right"><?php echo($acc_array['gpfloan']); ?></td>
                <td class="normal">16).Telephone Bill</td>
                <td class="normal" align="right"><?php echo($acc_array['telephone']); ?></td>
            </tr>
            <tr>
            	<td class="normal">3).Personal Pay</td>
            	<td class="normal" align="right"><?php echo($acc_array['personal_pay']); ?></td>
                <td class="normal">3).NPS</td>
                <td class="normal" align="right"><?php echo($acc_array['nps']); ?></td>
                <td class="normal">17).House Loan</td>
                <td class="normal" align="right"><?php echo($acc_array['h_loan']); ?></td>
            </tr>
            <tr>
            	<td class="normal">4).Other Allowance</td>
            	<td class="normal" align="right"><?php echo($acc_array['other_allow']); ?></td>
                <td class="normal">4).NPS Loan</td>
                <td class="normal" align="right"><?php echo($acc_array['npsloan']); ?></td>
                <td class="normal">18).Computer Loan</td>
                <td class="normal" align="right"><?php echo($acc_array['c_loan']); ?></td>
            </tr>
            <tr>
            	<td class="normal">5).Washing Allowance</td>
            	<td class="normal" align="right"><?php echo($acc_array['wash_allow']); ?></td>
                <td class="normal">5).LIC SRE</td>
                <td class="normal" align="right"><?php echo($acc_array['lic']); ?></td>
                <td class="normal">19).House Rent</td>
                <td class="normal" align="right"><?php echo($acc_array['h_rent']); ?></td>
            </tr>
            <tr>
            	<td class="normal">6).Conveyance Allowance</td>
            	<td class="normal" align="right"><?php echo($acc_array['convey_allow']); ?></td>
                <td class="normal">6).RDS</td>
                <td class="normal" align="right"><?php echo($acc_array['rds']); ?></td>
                <td class="normal">20).Garage Rent</td>
                <td class="normal" align="right"><?php echo($acc_array['g_rent']); ?></td>
            </tr>
            <tr>
            	<td class="normal">7).TPT. Allowance</td>
            	<td class="normal" align="right"><?php echo($acc_array['tpt']); ?></td>
                <td class="normal">7).GIS</td>
                <td class="normal" align="right"><?php echo($acc_array['gis']); ?></td>
                <td class="normal">21).Electricity</td>
                <td class="normal" align="right"><?php echo($acc_array['electricity']); ?></td>
            </tr>
            <tr>
            	<td class="normal">8).Lib. Incentive</td>
            	<td class="normal" align="right"><?php echo($acc_array['lib_incen']); ?></td>
                <td class="normal">8).Association</td>
                <td class="normal" align="right"><?php echo($acc_array['association']); ?></td>
                <td class="normal">22).Water Charges</td>
                <td class="normal" align="right"><?php echo($acc_array['w_charge']); ?></td>
            </tr>
            <tr>
            	<td class="normal">9).Int. Relief</td>
            	<td class="normal" align="right"><?php echo($acc_array['relief']); ?></td>
                <td class="normal">9).Misc Recovery</td>
                <td class="normal" align="right"><?php echo($acc_array['recovery']); ?></td>
                <td class="normal">23).Meter Rent</td>
                <td class="normal" align="right"><?php echo($acc_array['m_rent']); ?></td>
            </tr>
            <tr>
            	<td class="normal">10).Dearness Allowance</td> 
                <td class="normal" align="right"><?php echo($acc_array['da']); ?></td>
                <td class="normal">10).Mandir</td>
                <td class="normal" align="right"><?php echo($acc_array['mandir']); ?></td>
                <td class="normal">24).Furniture Rent</td>
                <td class="normal" align="right"><?php echo($acc_array['f_rent']); ?></td>
            </tr>
            <tr>
            	<td class="normal">11).HRA</td>
                <td class="normal" align="right"> <?php echo($acc_array['hra']); ?></td>
                <td class="normal">11).Vehicle Bill</td>
                <td class="normal" align="right"><?php echo($acc_array['vbill']); ?></td>
                <td class="normal">25).Income Tax</td>
                <td class="normal" align="right"><?php echo($acc_array['i_tax']); ?></td>
            </tr>
            <tr>
            	<td class="normal">12).Supplementary Allowance</td>
                <td class="normal" align="right"><?php echo($acc_array['supp_allow']) ;?>&nbsp;</td>
                <td class="normal">12).Vehicle Advance</td>
                <td class="normal" align="right"><?php echo($acc_array['v_advance']); ?></td>
                <td class="normal">26).Rev. Stamp</td>
                <td class="normal" align="right"><?php echo($acc_array['r_stamp']); ?></td>
            </tr>
            <tr>
            	<td class="normal">13).PF IITR Contribution*</td>
                <td class="normal" align="right"><?php echo($acc_array['nps']) ;?>&nbsp;</td>
                <td class="normal">13).Wheat Advance</td>
                <td class="normal" align="right"><?php echo($acc_array['w_advance']); ?></td>
                <td class="normal">27).Extra PF.  Subscription</td>
                <td class="normal" align="right"><?php echo($acc_array['e_pf_subs']); ?></td>
            </tr>
            <tr>
            	<td class="normal">&nbsp;</td>
                <td class="normal">&nbsp;</td>
                <td class="normal">14).Festival Advance</td>
                <td class="normal" align="right"><?php echo($acc_array['f_advance']); ?></td>
                <td class="normal">28).Medicare</td>
                <td class="normal" align="right"><?php echo($acc_array['medicare']); ?></td>
            </tr>
            <tr>
            	<td class="normal" colspan="5">&nbsp;</td>
            </tr>
            <tr>
            	<td class="normal">Gross Salary</td><td align="right"><?php echo($grand_total); ?></td>
                <td class="normal" colspan="2">&nbsp;</td>
                <td class="normal">Net total deductions</td><td align="right"><?php echo($tot_dedn);?></td>
            </tr>
            <tr>
            	<td class="normal" colspan="2">*this field is for information only </td>
            	<td class="normal" colspan="2" align="right">&nbsp;</td>
                <td class="normal">Net Payment</td>
                <td align="right"><?php $net = $grand_total - $tot_dedn; echo($net); ?></td>
            </tr>
		</table>
    </td></tr>
<tr>
	<td class="normal">&nbsp;<hr align="center" width="98%" color="#666666" noshade="noshade" size="2" /></td>
</tr>
</table>
<?php }?>
</body>
</html>
