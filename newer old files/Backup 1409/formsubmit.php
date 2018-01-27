<?php 
if($_POST['submit'] == "Submit")
{
	/* Connecting to the database */
	include("dbconnect.php");
	
	if($_POST['hid'] == "nu_employee")
	{
		$insert_empquery = "INSERT INTO empdetails (`emp_no`, `emp_name`, `emp_desig`, `emp_bankacno`, `date_birth`, `date_join`, `date_appoint`, `emp_jis`, `emp_category`, `pen_sch`) VALUES ('$_POST[emp_no]', '$_POST[emp_name]', '$_POST[emp_desig]', '$_POST[emp_bankacno]', '$_POST[date_birth]', '$_POST[date_join]', '$_POST[date_appoint]', '$_POST[emp_jis]', '$_POST[emp_category]', '$_POST[pen_sch])";
	mysql_query($insert_empquery) or die(mysql_error());
	}
	elseif($_POST['hid'] == "edit_employee")
	{
		$update_empquery = "update empdetails set emp_name = '$_POST[emp_name]', emp_desig = '$_POST[emp_desig]', emp_bankacno = '$_POST[emp_bankacno]', date_birth = '$_POST[date_birth]', date_join = '$_POST[date_join]', date_appoint = '$_POST[date_appoint]', emp_jis = '$_POST[emp_jis]', emp_category = '$_POST[emp_category]', pen_sch = '$_POST[pen_sch]' where emp_no = '$_POST[emp_no]', ";
	mysql_query($update_empquery) or die(mysql_error());
	}
	elseif($_POST['hid'] == "salary_bill")
	{
	
	$da = 0.35*($_POST['basic_pay'] + $_POST['grade_pay']);
	$hra = 0.10*($_POST['basic_pay'] + $_POST['grade_pay']);
	
	if($_POST['pen_sch'] == "nps"){
		$nps = 0.10*($_POST['basic_pay'] + $_POST['grade_pay'] + $da);
		$gpf = 0;
		$pf_iit = $_POST['nps'];
	}elseif($_POST['pen_sch'] == "gpf"){
		$nps = 0;
		$gpf = 0.10*($_POST['basic_pay'] + $_POST['grade_pay']);
		$pf_iit = $_POST['gpf'];
	}
	 	
	$gross_salary = $_POST['basic_pay'] + $_POST['grade_pay'] + $_POST['personal_pay'] + $_POST['other_allow'] + $_POST['wash_allow'] + $_POST['convey_allow'] + $_POST['lib_incen'] + $_POST['relief'] + $_POST['tpt'] + $da + $hra;
	$total_dedn = $gpf + $_POST['bank_loan'] + $_POST['gpfloan'] + $_POST['telephone'] + $nps + $_POST['h_loan'] + $_POST['npsloan'] + $_POST['c_loan'] + $_POST['lic'] + $_POST['h_rent'] + $_POST['rds'] + $_POST['g_rent'] + $_POST['gis'] + $_POST['electricity'] + $_POST['association'] + $_POST['w_charge'] + $_POST['recovery'] + $_POST['m_rent'] + $_POST['mandir'] + $_POST['f_rent'] + $_POST['vbill'] + $_POST['i_tax'] + $_POST['v_advance'] + $_POST['r_stamp'] + $_POST['w_advance'] + $_POST['e_pf_subs'] + $_POST['f_advance'] + $_POST['m_recovery'];
	$net_pay = $gross_salary - $total_dedn;
	
	$insert_accquery = "insert into accounts set emp_no = '$_POST[emp_no]', emp_name = '$_POST[emp_name]', emp_desig = '$_POST[emp_desig]', emp_bankacno = '$_POST[emp_bankacno]', date_birth = '$_POST[date_birth]', date_join = '$_POST[date_join]', date_appoint = '$_POST[date_appoint]', emp_jis = '$_POST[emp_jis]', emp_category = '$_POST[emp_category]', basic_pay = '$_POST[basic_pay]', gpf = '$gpf', bank_loan = '$_POST[bank_loan]', bank_name = '$_POST[bank_name]', grade_pay = '$_POST[grade_pay]', gpfloan = '$_POST[gpfloan]', telephone = '$_POST[telephone]', personal_pay = '$_POST[personal_pay]', nps = '$nps', h_loan = '$_POST[h_loan]', other_allow = '$_POST[other_allow]', npsloan = '$_POST[npsloan]', c_loan = '$_POST[c_loan]', wash_allow = '$_POST[wash_allow]', lic = '$_POST[lic]', h_rent = '$_POST[h_rent]', convey_allow = '$_POST[convey_allow]', rds = '$_POST[rds]', g_rent = '$_POST[g_rent]', tpt = '$_POST[tpt]', gis = '$_POST[gis]', electricity = '$_POST[electricity]', lib_incen = '$_POST[lib_incen]', association = '$_POST[association]', w_charge = '$_POST[w_charge]', relief = '$_POST[relief]', recovery = '$_POST[recovery]', m_rent = '$_POST[m_rent]', mandir = '$_POST[mandir]', f_rent = '$_POST[f_rent]', vbill = '$_POST[vbill]', i_tax = '$_POST[i_tax]', v_advance = '$_POST[v_advance]', r_stamp = '$_POST[r_stamp]', w_advance = '$_POST[w_advance]', e_pf_subs = '$_POST[e_pf_subs]', f_advance = '$_POST[f_advance]', medicare = '$_POST[medicare]', pen_sch = '$_POST[pen_sch]', gross_salary = '$gross_salary', total_dedn = '$total_dedn', net_pay = '$net_pay' ";
	mysql_query($insert_accquery) or die(mysql_error());
	
	
	
/*	$insert_payquery = "insert into accounts set emp_no = '$_POST[emp_no]', emp_bankacno = '$_POST[emp_bankacno]', emp_category = '$_POST[emp_category]', basic_pay = '$_POST[basic_pay]', gpf = '$gpf', bank_loan = '$_POST[bank_loan]', bank_name = '$_POST[bank_name]', grade_pay = '$_POST[grade_pay]', gpfloan = '$_POST[gpfloan]', telephone = '$_POST[telephone]', personal_pay = '$_POST[personal_pay]', nps = '$nps', h_loan = '$_POST[h_loan]', other_allow = '$_POST[other_allow]', npsloan = '$_POST[npsloan]', c_loan = '$_POST[c_loan]', wash_allow = '$_POST[wash_allow]', lic = '$_POST[lic]', h_rent = '$_POST[h_rent]', convey_allow = '$_POST[convey_allow]', rds = '$_POST[rds]', g_rent = '$_POST[g_rent]', tpt = '$_POST[tpt]', gis = '$_POST[gis]', electricity = '$_POST[electricity]', lib_incen = '$_POST[lib_incen]', association = '$_POST[association]', w_charge = '$_POST[w_charge]', relief = '$_POST[relief]', recovery = '$_POST[recovery]', m_rent = '$_POST[m_rent]', mandir = '$_POST[mandir]', f_rent = '$_POST[f_rent]', vbill = '$_POST[vbill]', i_tax = '$_POST[i_tax]', v_advance = '$_POST[v_advance]', r_stamp = '$_POST[r_stamp]', w_advance = '$_POST[w_advance]', e_pf_subs = '$_POST[e_pf_subs]', f_advance = '$_POST[f_advance]', medicare = '$_POST[medicare]'";
	mysql_query($insert_payquery) or die(mysql_error()); */
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Form Submission</title>
</head>
<body>
<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
<tr>
	<td>Thanx, Bye.
	</td>
</tr>
</table>
</body>
</html>