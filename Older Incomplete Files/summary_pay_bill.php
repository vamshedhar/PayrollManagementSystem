<?php include("dbconnect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Summary Of Pay Bill</title>
</head>
<body>
<?php 
	$ledger_query = "select * from accounts where emp_category = '$_POST[emp_category]' and month = '$_POST[month]' and year = '$_POST[year]'"; 
	$ledger_result = mysql_query($ledger_query);
	
	$tot_dedn = 0; $tot_gpf = 0; $tot_bank_loan = 0; $tot_gpfloan = 0;$tot_telephone = 0; $tot_nps = 0; $tot_h_loan = 0; $tot_npsloan = 0; $tot_c_loan = 0; $tot_lic = 0; $tot_h_rent = 0; $tot_rds = 0; $tot_g_rent = 0; $tot_gis = 0; $tot_electricity = 0; $tot_association = 0; $tot_w_charge = 0; $tot_recovery = 0; $tot_m_rent = 0; $tot_mandir = 0; $tot_f_rent = 0; $tot_vbill = 0; $tot_i_tax = 0; $tot_v_advance = 0; $tot_r_stamp = 0; $tot_w_advance = 0;  $tot_e_pf_subs = 0;  $tot_f_advance = 0;  $tot_m_recovery  = 0;  $tot_medicare; $tot_supp_allow = 0;
	
	$gross_sal = 0; $tot_basic_pay  = 0;  $tot_grade_pay  = 0;  $tot_personal_pay  = 0;  $tot_other_allow  = 0;  $tot_wash_allow  = 0;  $tot_convey_allow  = 0;  $tot_lib_incen  = 0;  $tot_relief  = 0;  $tot_tpt   = 0;  $tot_da  = 0; $tot_hra;

	$grand_total = 0; 
	$i = 0;

	while($ledger_array = mysql_fetch_array($ledger_result))
	{
		$i++;
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
		$tot_supp_allow += $ledger_array['supp_allow'];
	
	// The Sums Of the Deductions
		$tot_gpf+=$ledger_array['gpf'];
		$tot_bank_loan+= $ledger_array['bank_loan'];
		$tot_gpfloan+= $ledger_array['gpfloan'];
		$tot_telephone+= $ledger_array['telephone']; 
		$tot_nps+=$ledger_array['nps'];
		$tot_h_loan+= $ledger_array['h_loan'];
		$tot_npsloan+= $ledger_array['npsloan'];
		$tot_c_loan+= $ledger_array['c_loan'];
		$tot_lic+= $ledger_array['lic'];
		$tot_h_rent+= $ledger_array['h_rent']; 
		$tot_rds+= $ledger_array['rds'];
		$tot_g_rent+= $ledger_array['g_rent']; 
		$tot_gis+= $ledger_array['gis']; 
		$tot_electricity+= $ledger_array['electricity'];
		$tot_association+= $ledger_array['association']; 
		$tot_w_charge+= $ledger_array['w_charge']; 
		$tot_recovery+= $ledger_array['recovery']; 
		$tot_m_rent+= $ledger_array['m_rent']; 
		$tot_mandir+= $ledger_array['mandir']; 
		$tot_f_rent+= $ledger_array['f_rent']; 
		$tot_vbill+= $ledger_array['vbill']; 
		$tot_i_tax+= $ledger_array['i_tax']; 
		$tot_v_advance+= $ledger_array['v_advance']; 
		$tot_r_stamp+= $ledger_array['r_stamp'];
		$tot_w_advance+= $ledger_array['w_advance']; 
		$tot_e_pf_subs+= $ledger_array['e_pf_subs']; 
		$tot_f_advance+= $ledger_array['f_advance']; 
		$tot_medicare+= $ledger_array['medicare'];
	}
	
	$tot_dedn =$tot_gpf+$tot_bank_loan+$tot_gpfloan+$tot_telephone+$tot_nps+$tot_h_loan+$tot_npsloan+$tot_c_loan+$tot_lic+$tot_h_rent+$tot_rds+$tot_g_rent+$tot_gis+$tot_electricity+$tot_association+$tot_w_charge+$tot_recovery+$tot_m_rent+$tot_mandir+$tot_f_rent+$tot_vbill+$tot_i_tax+$tot_v_advance+$tot_r_stamp+$tot_w_advance+ $tot_e_pf_subs+ $tot_f_advance+ $tot_m_recovery + $tot_medicare;
	
	$gross_sal = $tot_basic_pay + $tot_grade_pay + $tot_personal_pay + $tot_other_allow + $tot_wash_allow + $tot_convey_allow + $tot_lib_incen + $tot_relief + $tot_tpt  + $tot_da + $tot_hra + $tot_supp_allow;
	
	$grand_total = $gross_sal - $tot_dedn;

?>

<table width="1000">
<tr><td colspan="3" align="center" valign="middle"><h1>Summary Of Pay Bill No.</h1></td></tr>
<tr><td align="center"><u>Category : <?php echo($_POST['emp_category']);?></u></td><td width="50">&nbsp;</td><td><u>SALARY FOR THE MONTH OF <?php echo($_POST['month']."/".$_POST['year']); ?></u></td></tr>
<tr><td>
<table width="450" border="0" cellpadding="0" cellspacing="0">
<tr><td colspan="2" align="right"><u>NUMBER OF EMPLOYEES : </u></td><td align="center"><?php echo($i);?></td></tr>
<tr><td colspan="3">&nbsp;</td></tr> 
<tr><td>1.</td><td>BASIC PAY</td><td width="150" align="right"><?php echo($tot_basic_pay);?></td></tr>
<tr><td>2.</td><td>GRADE PAY</td><td align="right"><?php echo($tot_grade_pay);?></td></tr>
<tr><td>3.</td><td>PERSONAL PAY</td><td align="right"><?php echo($tot_personal_pay);?></td></tr>
<tr><td>4.</td><td>DEARNESS ALLOWANCE</td><td align="right"><?php echo($tot_da);?></td></tr>
<tr><td>5.</td><td>TPT ALLOWANCE</td><td align="right"><?php echo($tot_tpt);?></td></tr>
<tr><td>6.</td><td>LIB INCENTIVE</td><td align="right"><?php echo($tot_lib_incen);?></td></tr>
<tr><td>7.</td><td>INTERIM RELIEF</td><td align="right"><?php echo($tot_relief);?></td></tr>
<tr><td>8.</td><td>HOUSE RENT ALLOWANCE</td><td align="right"><?php echo($tot_hra);?></td></tr>
<tr><td>9.</td><td>OTHER ALLOWANCES</td><td align="right"><?php echo($tot_other_allow);?></td></tr>
<tr><td>10.</td><td>WASHING ALLOWANCE</td><td align="right"><?php echo($tot_wash_allow);?></td></tr>
<tr><td>11.</td><td>CONVEYANCE ALLOWANCE</td><td align="right"><?php echo($tot_convey_allow);?></td></tr>
<tr><td>12.</td><td>SUPPLEMENTARY ALLOWANCE</td><td align="right"><?php echo($tot_supp_allow); ?></td></tr>
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
</td><td width="50">&nbsp;</td><td>
<table width="450">
<tr><td>1.</td><td>GPF</td><td width="150" align="right"><?php echo($tot_gpf);?></td></tr>
<tr><td>2.</td><td>GPF LOAN</td><td align="right"><?php echo($tot_gpfloan);?></td></tr>
<tr><td>3.</td><td>NPS</td><td align="right"><?php echo($tot_nps);?></td></tr>
<tr><td>4.</td><td>NPS LOAN</td><td align="right"><?php echo($tot_npsloan);?></td></tr>
<tr><td>5.</td><td>LIC(SRE)</td><td align="right"><?php echo($tot_lic);?></td></tr>
<tr><td>6.</td><td>RDS</td><td align="right"><?php echo($tot_rds);?></td></tr>
<tr><td>7.</td><td>GIS</td><td align="right"><?php echo($tot_gis);?></td></tr>
<tr><td>8.</td><td>ASSO.</td><td align="right"><?php echo($tot_association);?></td></tr>
<tr><td>9.</td><td>MISC. REC.</td><td align="right"><?php echo($tot_recovery);?></td></tr>
<tr><td>10.</td><td>DPT. MANDIR</td><td align="right"><?php echo($tot_mandir);?></td></tr>
<tr><td>11.</td><td>VEHICLE BILL</td><td align="right"><?php echo($tot_vbill);?></td></tr>
<tr><td>12.</td><td>VEHICLE ADV.</td><td align="right"><?php echo($tot_v_advance);?></td></tr>
<tr><td>13.</td><td>WHEAT ADV.</td><td align="right"><?php echo($tot_w_advance);?></td></tr>
<tr><td>14.</td><td>FESTIVAL ADV.</td><td align="right"><?php echo($tot_f_advance);?></td></tr>
<tr><td>15.</td><td>BANK LOAN</td><td align="right"><?php echo($tot_bank_loan);?></td></tr>
<tr><td>16.</td><td>HOUSE LOAN REFUND</td><td align="right"><?php echo($tot_h_loan);?></td></tr>
<tr><td>17.</td><td>COMPUTER LOAN</td><td align="right"><?php echo($tot_c_loan);?></td></tr>
<tr><td>18.</td><td>HOUSE RENT</td><td align="right"><?php echo($tot_h_rent);?></td></tr>
<tr><td>19.</td><td>GARAGE RENT</td><td align="right"><?php echo($tot_g_rent);?></td></tr>
<tr><td>20.</td><td>ELECTRICITY</td><td align="right"><?php echo($tot_electricity);?></td></tr>
<tr><td>21.</td><td>WATER CHARGES</td><td align="right"><?php echo($tot_w_charge);?></td></tr>
<tr><td>22.</td><td>METER RENT</td><td align="right"><?php echo($tot_m_rent);?></td></tr>
<tr><td>23.</td><td>FURNITURE RENT</td><td align="right"><?php echo($tot_f_rent);?></td></tr>
<tr><td>24.</td><td>INCOME TAX</td><td align="right"><?php echo($tot_i_tax);?></td></tr>
<tr><td>25.</td><td>REV. STAMP</td><td align="right"><?php echo($tot_r_stamp);?></td></tr>
<tr><td>26.</td><td>EX. PF. SUBS.</td><td align="right"><?php echo($tot_e_pf_subs);?></td></tr>
<tr><td>27.</td><td>MEDICARE</td><td align="right"><?php echo($tot_medicare);?></td></tr>
</table>
</td></tr></table>

<table>
<tr><td>
<table width="500">
<tr><td width="358">TOTAL G.SALARY</td><td width="130" align="right"><?php echo($gross_sal); ?></td>
</tr>
<tr><td>PF. IITR CONT.</td><td align="right"><?php $pfcontri = $tot_nps+$tot_gpf; echo($pfcontri); ?></td></tr>
<tr><td>G. TOTAL</td><td align="right"><?php echo($pfcontri+$gross_sal); ?></td></tr>
</table></td>
<td width="50">&nbsp;</td>
<td><table width="500">
<tr><td>TOTAL DED. Rs.</td><td width="150" align="right"><?php echo($tot_dedn); ?></td></tr>
<tr><td>TOTAL NET PAYABLE Rs.</td><td align="right"><?php echo($gross_sal-$tot_dedn) ?></td></tr>
<tr><td>G. TOTAL</td><td align="right"><?php echo($pfcontri+$gross_sal); ?></td></tr>
</table></td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td align="center" colspan="3"><u>PASSED FOR PAYMENT FOR PAYMENT FOR Rs.&nbsp;&nbsp;
<?php $star = $pfcontri+$gross_sal; 
echo($star);
?></u></td></tr>
</table>
</body>
</html>