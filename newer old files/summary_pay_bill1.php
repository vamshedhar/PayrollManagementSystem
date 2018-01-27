<?php include("dbconnect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Summary</title>
</head>
<body>
<?php 
	$ledger_query = "select * from accounts where emp_category = '$_POST[emp_category]' and month = '$_POST[month]' and year = '$_POST[year]'"; 
	$ledger_result = mysql_query($ledger_query);
	$tot_basic_pay =0; $tot_grade_pay  =0; $tot_personal_pay  =0; $tot_other_allow  =0; $tot_wash_allow  =0; $tot_convey_allow  =0; $tot_lib_incen  =0; $tot_relief  =0; $tot_tpt  =0; $tot_da =0; $tot_hra =0;
	while($ledger_array = mysql_fetch_array($ledger_result))
	{
	// The Sums Of the Payments
		$tot_basic_pay += $ledger_array['basic_pay'];
		$tot_grade_pay  += $ledger_array['grade_pay'];
		$tot_personal_pay  += $ledger_array['personal_pay']; 
		$tot_other_allow  += $ledger_array['other_allow']; 
		$tot_wash_allow  += $ledger_array['wash_allow']; 
		$tot_convey_allow  += $ledger_array['convey_allow']; 
		$tot_lib_incen  += $ledger_array['lib_incen']; 
		$tot_relief  += $ledger_array['relief']; 
		$tot_tpt  += $ledger_array['tpt']; 
		$tot_da += $ledger_array['da']; 
		$tot_hra += $ledger_array['hra'];
		$tot_pf_contri += $ledger_array['pf_contri'];
	
	// The Sums Of the Deductions
		$tot_gpf+=$ledger_array[''];
		$tot_bank_loan+= $ledger_array[''];
		$tot_gpfloan+= $ledger_array[''];
		$tot_telephone+= $ledger_array['']; 
		$tot_nps+=$ledger_array[''];
		$tot_h_loan+= $ledger_array[''];
		$tot_npsloan+= $ledger_array[''];
		$tot_c_loan+= $ledger_array[''];
		$tot_lic+= $ledger_array[''];
		$tot_h_rent+= $ledger_array['']; 
		$tot_rds+= $ledger_array[''];
		$tot_g_rent+= $ledger_array['']; 
		$tot_gis+= $ledger_array['']; 
		$tot_electricity+= $ledger_array[''];
		$tot_association+= $ledger_array['']; 
		$tot_w_charge+= $ledger_array['']; 
		$tot_recovery+= $ledger_array['']; 
		$tot_m_rent+= $ledger_array['']; 
		$tot_mandir+= $ledger_array['']; 
		$tot_f_rent+= $ledger_array['']; 
		$tot_vbill+= $ledger_array['']; 
		$tot_i_tax+= $ledger_array['']; 
		$tot_v_advance+= $ledger_array['']; 
		$tot_r_stamp+= $ledger_array[''];
		$tot_w_advance+= $ledger_array['']; 
		$tot_e_pf_subs+= $ledger_array['']; 
		$tot_f_advance+= $ledger_array['']; 
		$tot_m_recovery+= $ledger_array[''];
	}
	
	$tot_dedn =$tot_gpf+$tot_bank_loan+$tot_gpfloan+$tot_telephone+$tot_nps+$tot_h_loan+$tot_npsloan+$tot_c_loan+$tot_lic+$tot_h_rent+$tot_rds+$tot_g_rent+$tot_gis+$tot_electricity+$tot_association+$tot_w_charge+$tot_recovery+$tot_m_rent+$tot_mandir+$tot_f_rent+$tot_vbill+$tot_i_tax+$tot_v_advance+$tot_r_stamp+$tot_w_advance+ $tot_e_pf_subs+ $tot_f_advance+ $tot_m_recovery;
	
	$gross_sal = $tot_basic_pay + $tot_grade_pay + $tot_personal_pay + $tot_other_allow + $tot_wash_allow + $tot_convey_allow + $tot_lib_incen + $tot_relief + $tot_tpt  + $tot_da +$tot_hra;
?>
<table width="1000">
<tr><td>
<table width="500" border="0" cellpadding="0" cellspacing="0"> 
<tr><td>1.</td><td>BASIC PAY</td><td width="150">99999</td></tr>
<tr><td>2.</td><td>GRADE PAY</td><td>345345</td></tr>
<tr><td>3.</td><td>PERSONAL PAY</td><td>234</td></tr>
<tr><td>4.</td><td>DEARNESS ALLOWANCE</td><td>234234</td></tr>
<tr><td>5.</td><td>TPT ALLOWANCE</td><td>2345</td></tr>
<tr><td>6.</td><td>LIB INCENTIVE</td><td>23422</td></tr>
<tr><td>7.</td><td>INTERIM RELIEF</td><td>2435</td></tr>
<tr><td>8.</td><td>HOUSE RENT ALLOWANCE</td><td>2545</td></tr>
<tr><td>9.</td><td>OTHER ALLOWANCES</td><td>35655</td></tr>
<tr><td>10.</td><td>WASHING ALLOWANCE</td><td>32432</td></tr>
<tr><td>11.</td><td>CYCLE ALLOWANCE</td><td>2345243</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>
<tr><td colspan="3">&nbsp;</td></tr>


</table>
</td><td>
<table width="500">
<tr><td>1.</td><td>GPF</td><td width="150">2345234</td></tr>
<tr><td>2.</td><td>GPF LOAN</td><td>23423</td></tr>
<tr><td>3.</td><td>CPF</td><td>32423</td></tr>
<tr><td>4.</td><td>CPF LOAN</td><td>3242</td></tr>
<tr><td>5.</td><td>LIC(SRE)</td><td>23431</td></tr>
<tr><td>6.</td><td>RDS</td><td>23234</td></tr>
<tr><td>7.</td><td>GIS</td><td>32421</td></tr>
<tr><td>8.</td><td>ASSO.</td><td>42534</td></tr>
<tr><td>9.</td><td>MISC. REC.</td><td> </td></tr>
<tr><td>10.</td><td>DPT. MANDIR</td><td></td></tr>
<tr><td>11.</td><td>VEHICLE BILL</td><td></td></tr>
<tr><td>12.</td><td>VEHICLE ADV.</td><td></td></tr>
<tr><td>13.</td><td>WHEAT ADV.</td><td></td></tr>
<tr><td>14.</td><td>FESTIVAL ADV.</td><td></td></tr>
<tr><td>15.</td><td>VIJAYA BANK</td><td></td></tr>
<tr><td>16.</td><td>O.B.C. BANK</td><td></td></tr>
<tr><td>17.</td><td>HOUSE LOAN REFUND</td><td></td></tr>
<tr><td>18.</td><td>COMPUTER LOAN</td><td></td></tr>
<tr><td>19.</td><td>HOUSE RENT</td><td></td></tr>
<tr><td>20.</td><td>GARAGE RENT</td><td></td></tr>
<tr><td>21.</td><td>ELECTRICITY</td><td></td></tr>
<tr><td>22.</td><td>WATER CHARGES</td><td></td></tr>
<tr><td>23.</td><td>METER RENT</td><td></td></tr>
<tr><td>24.</td><td>FURNITURE RENT</td><td></td></tr>
<tr><td>25.</td><td>INCOME TAX</td><td></td></tr>
<tr><td>26.</td><td>REV. STAMP</td><td></td></tr>
<tr><td>27.</td><td>EX. PF. SUBS.</td><td></td></tr>
<tr><td>28.</td><td>MEDICARE</td><td></td></tr>
</table>
</td></tr></table>
<table>
<tr><td>
<table width="500">
<tr><td>TOTAL G.SALARY</td><td width="150"></td></tr>
<tr><td>PF. IITR CONT.</td><td></td></tr>
<tr><td>G. TOTAL</td><td></td></tr>
<tr><td>PASSED FOR PAYMENT FOR PAYMENT FOR Rs.</td><td><?php  ?></td></tr>
</table></td>
<td><table width="500">
<tr><td>TOTAL DED. Rs.</td><td width="150"></td></tr>
<tr><td>TOTAL NET PAYABLE Rs.</td><td></td></tr>
<tr><td>G. TOTAL</td><td></td></tr>
</table></td></tr></table>
</body>
</html>