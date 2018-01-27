<?php 
/* Connecting to the database */
include("dbconnect.php");
?>
<?php
if($_POST['submit'] == "Submit" && $_POST['hid'] == "nu_employee")
	{
		$insert_empnewquery = "INSERT INTO empdetails set emp_no = '$_POST[emp_no]', emp_name = '$_POST[emp_name]',  emp_desig = '$_POST[emp_desig]',  emp_bankacno = '$_POST[emp_bankacno]',  date_birth = '$_POST[date_birth]' , date_join = '$_POST[date_join]', date_appoint = '$_POST[date_appoint]', emp_jis = '$_POST[emp_jis]', emp_category = '$_POST[emp_category]', pen_sch = '$_POST[pen_sch]', res_status = '$_POST[res_status]'";
	mysql_query($insert_empnewquery) or die(mysql_error());
}elseif($_POST['submit'] == "Submit" && $_POST['hid'] == "edit_employee"){
	echo($_POST['hid']);
		$update_empeditquery = "UPDATE empdetails SET emp_name = '$_POST[emp_name]', emp_desig = '$_POST[emp_desig]', emp_bankacno = '$_POST[emp_bankacno]', date_birth = '$_POST[date_birth]', date_join = '$_POST[date_join]', date_appoint = '$_POST[date_appoint]', emp_jis = '$_POST[emp_jis]', emp_category = '$_POST[emp_category]', pen_sch = '$_POST[pen_sch]', res_status = '$_POST[res_status]' WHERE emp_no = '$_POST[emp_no]'";
	mysql_query($update_empeditquery) or die(mysql_error());
	$message = "The details of the employee have been updated.";
}elseif($_POST['submit'] == "Submit" && $_POST['hid'] == "salary_form"){
	$da = 0.35*($_POST['basic_pay'] + $_POST['grade_pay']);
	
	if($_POST['res_status'] == "non-residing"){
		$hra = 0.10*($_POST['basic_pay'] + $_POST['grade_pay']);
		$h_rent = 0;
		
	}elseif($_POST['res_status'] == "residing"){
		$hra = 0;
		$h_rent = $_POST['h_rent'];
	}
	
	
	if($_POST['pen_sch'] == "nps"){
		$nps = 0.10*($_POST['basic_pay'] + $_POST['grade_pay'] + $da);
		$gpf = 0;
		$pf_contri = $_POST['nps'];
		
	}elseif($_POST['pen_sch'] == "gpf"){
		$nps = 0;
		$gpf = 0.10*($_POST['basic_pay'] + $_POST['grade_pay']);
		$pf_contri = $_POST['gpf'];
	}
	 	
	$gross_salary = $_POST['basic_pay'] + $_POST['grade_pay'] + $_POST['personal_pay'] + $_POST['other_allow'] + $_POST['wash_allow'] + $_POST['convey_allow'] + $_POST['lib_incen'] + $_POST['relief'] + $_POST['tpt'] + $da + $hra;
	
	$total_dedn = $gpf + $_POST['bank_loan'] + $_POST['gpfloan'] + $_POST['telephone'] + $nps + $_POST['h_loan'] + $_POST['npsloan'] + $_POST['c_loan'] + $_POST['lic'] + $h_rent + $_POST['rds'] + $_POST['g_rent'] + $_POST['gis'] + $_POST['electricity'] + $_POST['association'] + $_POST['w_charge'] + $_POST['recovery'] + $_POST['m_rent'] + $_POST['mandir'] + $_POST['f_rent'] + $_POST['vbill'] + $_POST['i_tax'] + $_POST['v_advance'] + $_POST['r_stamp'] + $_POST['w_advance'] + $_POST['e_pf_subs'] + $_POST['f_advance'] + $_POST['m_recovery'] + $_POST['medicare'];
	$net_pay = $gross_salary - $total_dedn;
	
	$insert_accquery = "insert into accounts set month = '$_POST[month]', year = '$_POST[year]', emp_no = '$_POST[emp_no]', emp_name = '$_POST[emp_name]', emp_desig = '$_POST[emp_desig]', emp_bankacno = '$_POST[emp_bankacno]', date_birth = '$_POST[date_birth]', date_join = '$_POST[date_join]', date_appoint = '$_POST[date_appoint]', emp_jis = '$_POST[emp_jis]', emp_category = '$_POST[emp_category]', pen_sch = '$_POST[pen_sch]', res_status = '$_POST[res_status]', basic_pay = '$_POST[basic_pay]', da = '$da', hra = '$hra', gpf = '$gpf', bank_loan = '$_POST[bank_loan]', bank_name = '$_POST[bank_name]', grade_pay = '$_POST[grade_pay]', gpfloan = '$_POST[gpfloan]', telephone = '$_POST[telephone]', personal_pay = '$_POST[personal_pay]', nps = '$nps', h_loan = '$_POST[h_loan]', other_allow = '$_POST[other_allow]', npsloan = '$_POST[npsloan]', c_loan = '$_POST[c_loan]', wash_allow = '$_POST[wash_allow]', lic = '$_POST[lic]', h_rent = '$h_rent', convey_allow = '$_POST[convey_allow]', rds = '$_POST[rds]', g_rent = '$_POST[g_rent]', tpt = '$_POST[tpt]', gis = '$_POST[gis]', electricity = '$_POST[electricity]', lib_incen = '$_POST[lib_incen]', association = '$_POST[association]', w_charge = '$_POST[w_charge]', relief = '$_POST[relief]', recovery = '$_POST[recovery]', m_rent = '$_POST[m_rent]', mandir = '$_POST[mandir]', f_rent = '$_POST[f_rent]', vbill = '$_POST[vbill]', i_tax = '$_POST[i_tax]', v_advance = '$_POST[v_advance]', r_stamp = '$_POST[r_stamp]', w_advance = '$_POST[w_advance]', e_pf_subs = '$_POST[e_pf_subs]', f_advance = '$_POST[f_advance]', medicare = '$_POST[medicare]', pf_contri = '$pf_contri', gross_salary = '$gross_salary', total_dedn = '$total_dedn', net_pay = '$net_pay'";
	mysql_query($insert_accquery) or die(mysql_error());
$message = "The salary details have been updated for the person '$_POST[emp_name]'";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Home - Payroll Register IITR</title>
</head>
<body>
<?php include("i_header.php"); ?>
<table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
<?php if($_GET['id'] == 1){ 
	$sal_query = "select * from empdetails order by emp_no";
	$sal_result = mysql_query($sal_query);
?>
<tr><td colspan="5"><hr width="98%" noshade="noshade" color="#000000" align="center" /></td></tr>
<tr>
<form name="salary_entry" action="salary_form.php" enctype="multipart/form-data" method="post" target="_self">
	<td width="40%" class="normal">Please select Employee No</td>
    <td width="15%" class="normal">
    	<select name="emp_no">
        <?php while($sal_array = mysql_fetch_array($sal_result)){ ?>
        	<option value="<?php echo($sal_array['emp_no']); ?>"><?php echo($sal_array['emp_no']); ?></option>
        <?php } ?>
        </select>
    </td>
    <td width="3%" class="normal"><input name="month" value="<?php echo(date("m")); ?>" type="text" size="2" maxlength="2" /></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="bank_transfer" type="hidden" />
</form>
</tr>
<?php /*
<tr><td colspan="5"><hr width="98%" noshade="noshade" color="#000000" align="center" /></td></tr>
<tr>
<form name="salary_entry" action="salary_form.php" enctype="multipart/form-data" method="post" target="_self">
	<td class="normal">Please select the Class</td>
    <td class="normal">
    	<select name="emp_category">
        	<option value="A">Class A</option>
            <option value="B">Class B</option>
            <option value="C">Class C</option>
            <option value="D">Class D</option>
            <option value="E">Class E</option>
        </select>
    </td>
    <td width="3%" class="normal"><input name="month" value="<?php echo(date("m")); ?>" type="text" size="2" maxlength="2" /></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="bank_transfer_class" type="hidden" />
</form>
</tr>
<?php */ ?>
<?php }elseif($message){
echo($message); ?>
<?php }else{ ?>
<table>
<tr><td><img src="Images/Welcomeimage.png"/></td></tr>
</table>
<?php } ?>
</table>
<?php include("i_footer.php"); ?>
</body>
</html>