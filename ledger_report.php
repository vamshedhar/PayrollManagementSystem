<html>
<head><?php /* Calculate the pixels according to the DPI of the printer */ ?>
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Ledger Report</title></head>
<body>
<h2 align="center">IIT Roorkee Saharanpur Campus, Saharanpur | Ledger Report</h2>
<table width="1200px" id="print" align="center" cellspacing="2" cellpadding="0">
<tr>
	<td class="print" width="2%" align="center" rowspan="4" valign="top">S NO</td>
	<td class="print" width="12%" align="center">NAME</td>
    <td class="print" width="7%" align="center">BASIC PAY</td>
    <td class="print" width="7%" align="center">GRADE PAY</td>
    <td class="print" width="7%" align="center">PERSO PAY</td>
    <td class="print" width="7%" align="center">DEAR ALL</td>
    <td class="print" width="7%" align="center">OTHER ALL</td>
    <td class="print" width="7%" align="center">HOUSE ALL</td>
    <td class="print" width="7%" align="center">TPT ALL</td>
    <td class="print" width="7%" align="center">CONV ALL</td>
    <td class="print" width="7%" align="center">WASH ALL</td>
    <td class="print" width="7%" align="center">LIB INCEN</td>
    <td class="print" width="7%" align="center">INT RELIEF</td>
    <td class="print" width="9%" align="center">GROSS SAL</td>
</tr>
<tr>
    <td class="print" align="center">DESIGNAT</td>
    <td class="print" align="center">GPF</td>
    <td class="print" align="center">GPF LOAN</td>
    <td class="print" align="center">NPS</td>
    <td class="print" align="center">NPS LOAN</td>
    <td class="print" align="center">LIC</td>
    <td class="print" align="center">RDS</td>
    <td class="print" align="center">GIS</td>
    <td class="print" align="center">ASSOC</td>
    <td class="print" align="center">MISC</td>
    <td class="print" align="center">MANDIR</td>
    <td class="print" align="center">VEH BILL</td>
    <td class="print" align="center"></td>
</tr>
<tr>
	<td class="print" align="center">EMP NO</td>
    <td class="print" align="center">VEH ADV</td>
    <td class="print" align="center">WHEAT</td>
    <td class="print" align="center">FESTIVAL</td>
    <td class="print" align="center">BANK LOAN</td>
    <td class="print" align="center">BANK NAME</td>
    <td class="print" align="center">HOME LOAN</td>
    <td class="print" align="center">COMP LOAN</td>
    <td class="print" align="center">H RENT</td>
    <td class="print" align="center">GARG RENT</td>
    <td class="print" align="center">ELECTRIC</td>
    <td class="print" align="center">WATER</td>
    <td class="print" align="center">TOT DED</td>
</tr>
<tr>
	<td class="print" align="center">PAY SCALE</td>
    <td class="print" align="center">METER</td>
    <td class="print" align="center">F RENT</td>
    <td class="print" align="center">INC TAX</td>
    <td class="print" align="center">R STAMP</td>
    <td class="print" align="center">EX CONT</td>
    <td class="print" align="center">MEDICARE</td>
    <td class="print" align="center">TELE BILL</td>
    <td class="print" align="center">STAFF CL</td>
    <td class="print" align="center"></td>
    <td class="print" align="center"></td>
    <td class="print" align="center"></td>
    <td class="print" align="center">NET PAY</td>
</tr>
<tr><td colspan="14"><hr /></td></tr>
<?php 
include("dbconnect.php");
include("check.php");
 ?>
<?php
	$ledger_query = "select * from accounts where emp_category = '$_POST[emp_category]' and month = '$_POST[month]' and year = '$_POST[year]'";
	$ledger_result = mysql_query($ledger_query);
	$i = 0;
	while($ledger_array = mysql_fetch_array($ledger_result)){	

		$i++;
		$gross_sal += $ledger_array['gross_salary'];
		$tot_dedn += $ledger_array['total_dedn'];
		$net_pay += $ledger_array['net_pay'];
?>
<tr>
	<td class="print" align="right" rowspan="4" valign="middle"><?php echo($i); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['emp_name']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['basic_pay']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['grade_pay']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['personal_pay']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['da']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['other_allow']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['hra']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['tpt']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['convey_allow']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['wash_allow']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['lib_incen']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['relief']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['gross_salary']); ?></td>
</tr>
<tr>
	<td class="print" align="right"><?php echo($ledger_array['emp_desig']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['gpf']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['gpfloan']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['nps']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['npsloan']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['lic']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['rds']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['gis']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['association']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['recovery']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['mandir']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['vbill']); ?></td>
    <td class="print" align="right"></td>
</tr>
<tr>
	<td class="print" align="right"><?php echo($ledger_array['emp_no']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['v_advance']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['w_advance']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['f_advance']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['bank_loan']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['bank_name']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['h_loan']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['c_loan']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['h_rent']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['g_rent']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['electricity']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['w_charge']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['total_dedn']); ?></td>
</tr>
<tr>
	<td class="print" align="right"><?php echo($ledger_array['pay_band']); ?></td>
	<td class="print" align="right"><?php echo($ledger_array['m_rent']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['f_rent']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['i_tax']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['r_stamp']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['e_pf_subs']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['medicare']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['telephone']); ?></td>
    <td class="print" align="right"><?php echo($ledger_array['staff_club']); ?></td>
    <td class="print" align="right"></td>
    <td class="print" align="right"></td>
    <td class="print" align="right"></td>
    <td class="print" align="right"><?php echo($ledger_array['net_pay']); ?></td>
</tr>
<tr height="2px" class="print"><td colspan="14"><hr /></td></tr>
<?php } ?>
<tr>
	<td class="print" align="center" colspan="2"><u>-Page Totals-</u></td>
    <td class="print" align="center" colspan="4"><u>Gross Salary Rs. <?php echo($gross_sal); ?></u></td>
    <td class="print" align="center" colspan="4"><u>Total Dedn Rs. <?php echo($tot_dedn); ?></td>
    <td class="print" align="center" colspan="4"><u><b>Net Pay Rs. <?php echo($net_pay); ?></b></u></td>
    
</tr>
<tr><td colspan="14"><hr /></td></tr>
</table>
</body></html>