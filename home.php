<?php 
/* Connecting to the database */
include("dbconnect.php");
include("check.php");

if(isset($_POST['nu_employee']) && $_POST['hid'] == "nu_employee")
	{
		$date_birth = $_POST['y1']."-".$_POST['m1']."-".$_POST['d1'] ;
		$date_appoint = $_POST['y2']."-".$_POST['m2']."-".$_POST['d2'] ;
		$emp_jis = $_POST['y3']."-".$_POST['m3']."-".$_POST['d3'] ;
		$insert_empnewquery = "insert into empdetails set emp_no = '$_POST[emp_no]', emp_name = '$_POST[emp_name]',  emp_desig = '$_POST[emp_desig]',  emp_bankacno = '$_POST[emp_bankacno]',  date_birth = '$date_birth' , date_appoint = '$date_appoint', emp_jis = '$emp_jis', emp_category = '$_POST[emp_category]', pen_sch = '$_POST[pen_sch]', res_status = '$_POST[res_status]'";
	mysql_query($insert_empnewquery) or die(mysql_error());
	$message = "The new employee has been added to the salary database. Thank You...!";
	}
/*elseif($_POST['hid'] == "edit_employee")
	{
		$update_empeditquery = "update empdetails set emp_name = '$_POST[emp_name]', emp_desig = '$_POST[emp_desig]', emp_bankacno = '$_POST[emp_bankacno]', date_birth = '$_POST[date_birth]', date_appoint = '$_POST[date_appoint]', emp_jis = '$_POST[emp_jis]', emp_category = '$_POST[emp_category]', pen_sch = '$_POST[pen_sch]', res_status = '$_POST[res_status]' WHERE emp_no = '$_POST[emp_no]'";
	mysql_query($update_empeditquery) or die(mysql_error());
	$message = "The details of the employee have been updated.";
	}
*/elseif(isset($_POST['sal_form']) && $_POST['hid'] == "salary_form")
	{
		if($_POST['emp_category'] == "G" || $_POST['emp_category'] == "H"){
		$da = round(0.45*($_POST['basic_pay'] + $_POST['grade_pay']));
	}else{
		$da = round(0.51*($_POST['basic_pay'] + $_POST['grade_pay']));
	}
	
	if($_POST['res_status'] == "non-residing")
	{
		$hra = round(0.10*($_POST['basic_pay'] + $_POST['grade_pay']));
		$h_rent = 0;		
	}
	elseif($_POST['res_status'] == "residing")
	{
		$hra = 0;
		$h_rent = $_POST['h_rent'];
	}
	
	if($_POST['pen_sch'] == "nps")
	{
		$nps = round(0.10*($_POST['basic_pay'] + $_POST['grade_pay'] + $da));
		$gpf = 0;
		$pf_contri = $nps;
	}
	elseif($_POST['pen_sch'] == "gpf")
	{
		$nps = 0;
		$gpf = round(0.10*($_POST['basic_pay'] + $_POST['grade_pay']));
		$pf_contri = 0;
	}
	
	$gross_salary = $_POST['basic_pay'] + $_POST['grade_pay'] + $_POST['personal_pay'] + $_POST['other_allow'] + $_POST['wash_allow'] + $_POST['convey_allow'] + $_POST['lib_incen'] + $_POST['relief'] + $_POST['tpt'] + $da + $hra +$_POST['supp_allow'];
	
	$total_dedn = $gpf + $_POST['bank_loan'] + $_POST['gpfloan'] + $_POST['telephone'] + $nps + $_POST['h_loan'] + $_POST['npsloan'] + $_POST['c_loan'] + $_POST['lic'] + $h_rent + $_POST['rds'] + $_POST['g_rent'] + $_POST['gis'] + $_POST['electricity'] + $_POST['association'] + $_POST['w_charge'] + $_POST['recovery'] + $_POST['m_rent'] + $_POST['mandir'] + $_POST['f_rent'] + $_POST['vbill'] + $_POST['i_tax'] + $_POST['v_advance'] + $_POST['r_stamp'] + $_POST['w_advance'] + $_POST['e_pf_subs'] + $_POST['f_advance'] + $_POST['m_recovery'] + $_POST['medicare'] 
+ $_POST['staff_club'];
	$net_pay = $gross_salary - $total_dedn;
	
	$insert_accquery = "insert into accounts set month = '$_POST[month]', year = '$_POST[year]', emp_no = '$_POST[emp_no]', emp_name = '$_POST[emp_name]', emp_desig = '$_POST[emp_desig]', emp_category = '$_POST[emp_category]', emp_bankacno = '$_POST[emp_bankacno]', pen_sch = '$_POST[pen_sch]', basic_pay = '$_POST[basic_pay]', da = '$da', hra = '$hra', gpf = '$gpf', bank_loan = '$_POST[bank_loan]', bank_name = '$_POST[bank_name]', grade_pay = '$_POST[grade_pay]', gpfloan = '$_POST[gpfloan]', telephone = '$_POST[telephone]', personal_pay = '$_POST[personal_pay]', nps = '$nps', h_loan = '$_POST[h_loan]', other_allow = '$_POST[other_allow]', npsloan = '$_POST[npsloan]', c_loan = '$_POST[c_loan]', wash_allow = '$_POST[wash_allow]', lic = '$_POST[lic]', h_rent = '$h_rent', convey_allow = '$_POST[convey_allow]', rds = '$_POST[rds]', g_rent = '$_POST[g_rent]', tpt = '$_POST[tpt]', gis = '$_POST[gis]', electricity = '$_POST[electricity]', lib_incen = '$_POST[lib_incen]', association = '$_POST[association]', w_charge = '$_POST[w_charge]', relief = '$_POST[relief]', recovery = '$_POST[recovery]', m_rent = '$_POST[m_rent]', mandir = '$_POST[mandir]', f_rent = '$_POST[f_rent]', vbill = '$_POST[vbill]', i_tax = '$_POST[i_tax]', v_advance = '$_POST[v_advance]', r_stamp = '$_POST[r_stamp]', w_advance = '$_POST[w_advance]', e_pf_subs = '$_POST[e_pf_subs]', f_advance = '$_POST[f_advance]', staff_club = '$_POST[staff_club]', medicare = '$_POST[medicare]', pf_contri = '$pf_contri', gross_salary = '$gross_salary', total_dedn = '$total_dedn', net_pay = '$net_pay', supp_allow = '$_POST[supp_allow]'";
	mysql_query($insert_accquery) or die(mysql_error());
$message = "The salary details have been entered for the person - ".$_POST[emp_name]." for ".$_POST[month]."/".$_POST[year];
}



/* SALARY FORM UPDATE QUERY input from salary_form_update.php */
elseif(isset($_POST['sal_update']) && $_POST['hid'] == "salary_form_update")
{
	$da = round(0.45*($_POST['basic_pay'] + $_POST['grade_pay']));
	
	if($_POST['res_status'] == "non-residing")
	{
		$hra = round(0.10*($_POST['basic_pay'] + $_POST['grade_pay']));
		$h_rent = 0;		
	}
	elseif($_POST['res_status'] == "residing")
	{
		$hra = 0;
		$h_rent = $_POST['h_rent'];
	}
	
	if($_POST['pen_sch'] == "nps")
	{
		$nps = round(0.10*($_POST['basic_pay'] + $_POST['grade_pay'] + $da));
		$gpf = 0;
		$pf_contri = $nps;
	}
	elseif($_POST['pen_sch'] == "gpf")
	{
		$nps = 0;
		$gpf = round(0.10*($_POST['basic_pay'] + $_POST['grade_pay']));
		$pf_contri = 0;
	}
	
	$gross_salary = $_POST['basic_pay'] + $_POST['grade_pay'] + $_POST['personal_pay'] + $_POST['other_allow'] + $_POST['wash_allow'] + $_POST['convey_allow'] + $_POST['lib_incen'] + $_POST['relief'] + $_POST['tpt'] + $da + $hra +$_POST['supp_allow'];
	
	$total_dedn = $gpf + $_POST['bank_loan'] + $_POST['gpfloan'] + $_POST['telephone'] + $nps + $_POST['h_loan'] + $_POST['npsloan'] + $_POST['c_loan'] + $_POST['lic'] + $h_rent + $_POST['rds'] + $_POST['g_rent'] + $_POST['gis'] + $_POST['electricity'] + $_POST['association'] + $_POST['w_charge'] + $_POST['recovery'] + $_POST['m_rent'] + $_POST['mandir'] + $_POST['f_rent'] + $_POST['vbill'] + $_POST['i_tax'] + $_POST['v_advance'] + $_POST['r_stamp'] + $_POST['w_advance'] + $_POST['e_pf_subs'] + $_POST['f_advance'] + $_POST['m_recovery'] + $_POST['medicare'] + $_POST['staff_club'];
	$net_pay = $gross_salary - $total_dedn;
	
	$update_accquery = "update accounts set emp_name = '$_POST[emp_name]', emp_desig = '$_POST[emp_desig]', emp_category = '$_POST[emp_category]', emp_bankacno = '$_POST[emp_bankacno]', pen_sch = '$_POST[pen_sch]', basic_pay = '$_POST[basic_pay]', da = '$da', hra = '$hra', gpf = '$gpf', bank_loan = '$_POST[bank_loan]', bank_name = '$_POST[bank_name]', grade_pay = '$_POST[grade_pay]', gpfloan = '$_POST[gpfloan]', telephone = '$_POST[telephone]', personal_pay = '$_POST[personal_pay]', nps = '$nps', h_loan = '$_POST[h_loan]', other_allow = '$_POST[other_allow]', npsloan = '$_POST[npsloan]', c_loan = '$_POST[c_loan]', wash_allow = '$_POST[wash_allow]', lic = '$_POST[lic]', h_rent = '$h_rent', convey_allow = '$_POST[convey_allow]', rds = '$_POST[rds]', g_rent = '$_POST[g_rent]', tpt = '$_POST[tpt]', gis = '$_POST[gis]', electricity = '$_POST[electricity]', lib_incen = '$_POST[lib_incen]', association = '$_POST[association]', w_charge = '$_POST[w_charge]', relief = '$_POST[relief]', recovery = '$_POST[recovery]', m_rent = '$_POST[m_rent]', mandir = '$_POST[mandir]', f_rent = '$_POST[f_rent]', vbill = '$_POST[vbill]', i_tax = '$_POST[i_tax]', v_advance = '$_POST[v_advance]', r_stamp = '$_POST[r_stamp]', w_advance = '$_POST[w_advance]', e_pf_subs = '$_POST[e_pf_subs]', f_advance = '$_POST[f_advance]', staff_club = '$_POST[staff_club]', medicare = '$_POST[medicare]', pf_contri = '$pf_contri', gross_salary = '$gross_salary', total_dedn = '$total_dedn', net_pay = '$net_pay', supp_allow = '$_POST[supp_allow]' WHERE month = '$_POST[month]' AND year = '$_POST[year]' AND emp_no = '$_POST[emp_no]'";
	mysql_query($update_accquery) or die(mysql_error());
$message = "The salary details have been updated for the person - ".$_POST[emp_name];
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

<?php 
if(isset($_POST['edit_employee']) && $_POST['hid'] == "edit_employee")
	{
		$date_birth2 = $_POST['y1']."-".$_POST['m1']."-".$_POST['d1'] ;
		$date_appoint2 = $_POST['y2']."-".$_POST['m2']."-".$_POST['d2'] ;
		$emp_jis2 = $_POST['y3']."-".$_POST['m3']."-".$_POST['d3'] ;
		$update_empeditquery = "update empdetails set emp_name = '$_POST[emp_name]', emp_desig = '$_POST[emp_desig]', emp_bankacno = '$_POST[emp_bankacno]', date_birth = '$date_birth2' , date_appoint = '$date_appoint2', emp_jis = '$emp_jis2', emp_category = '$_POST[emp_category]', pen_sch = '$_POST[pen_sch]', res_status = '$_POST[res_status]' WHERE emp_no = '$_POST[emp_no]'";
	mysql_query($update_empeditquery) or die(mysql_error());
	?><tr><td colspan="5" class="big"> <?php echo("The details of the employee have been updated.");?> </td></tr><?php
	}



if($_GET['id'] == 1)					// ENTRY FORM
{ 
	$sal_query = "select * from empdetails order by emp_no";
	$sal_result = mysql_query($sal_query);
?>
<tr><td colspan="5" class="big">Salary Entry</td></tr>
<tr><td colspan="5"><hr width="98%" noshade="noshade" color="#000000" align="center" /></td></tr>
<tr>
<form name="salary_entry" action="salary_form.php" enctype="multipart/form-data" method="post" target="_self">
	<td width="35%" class="normal">Please select Employee No</td>
    <td width="20%" class="normal">
    	<select name="emp_no">
        <?php 
			while($sal_array = mysql_fetch_array($sal_result))
			{ 
		?>
        	<option value="<?php echo($sal_array['emp_no']); ?>"><?php echo($sal_array['emp_no']."--".$sal_array['emp_name']); ?></option>
        <?php 
			} 
		?>
        </select>
    </td>
    <td width="3%" class="normal">
    <select name="month" id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="salary_entry" type="hidden" />
</form>
</tr>
<?php }elseif($_GET['id'] == 2)						// Individual View
{
	$sal_query = "select * from empdetails order by emp_no";
	$sal_result = mysql_query($sal_query);
?>
<tr><td colspan="5" class="big">Salary Slip View</td></tr>
<tr><td colspan="5"><hr width="98%" noshade="noshade" color="#000000" align="center" /></td></tr>
<tr>
<form name="salary_slip_view" action="salary_slip_report.php" enctype="multipart/form-data" method="post" target="_blank">
	<td width="35%" class="normal">Please select Employee No</td>
    <td width="20%" class="normal">
    	<select name="emp_no">
        <?php 
			while($sal_array = mysql_fetch_array($sal_result))
			{ 
		?>
        	<option value="<?php echo($sal_array['emp_no']); ?>"><?php echo($sal_array['emp_no']."--".$sal_array['emp_name']); ?></option>
        <?php 
			} 
		?>
        </select>
    </td>
    <td width="3%" class="normal">
    <select name="month" id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="salary_slip_view" type="hidden" />
</form>
</tr>

<?php
}elseif($_GET['id'] == 3)					// UPDATE FORM
{ 
	$sal_query = "select * from empdetails order by emp_no";
	$sal_result = mysql_query($sal_query);
?>
<?php if($_GET['err'] == 'exists'){?>
<tr><?php echo "*Entry already exists. If you want to make any changes you need to Update it here.";?></tr>
<?php } ?>
<tr><td colspan="5" class="big">Salary Updation</td></tr>
<tr><td colspan="5"><hr width="98%" noshade="noshade" color="#000000" align="center" /></td></tr>
<tr>
<form name="salary_update" action="salary_form_update.php" enctype="multipart/form-data" method="post" target="_self">
	<td width="35%" class="normal">Please select Employee No</td>
    <td width="20%" class="normal">
    	<select name="emp_no">
        <?php 
			while($sal_array = mysql_fetch_array($sal_result))
			{ 
		?>
        	<option value="<?php echo($sal_array['emp_no']); ?>"><?php echo($sal_array['emp_no']."--".$sal_array['emp_name']); ?></option>
        <?php 
			} 
		?>
        </select>
    </td>
    <td width="3%" class="normal">
    <select name="month" id="month">
        <option value="01">January</option>
        <option value="02">February</option>
        <option value="03">March</option>
        <option value="04">April</option>
        <option value="05">May</option>
        <option value="06">June</option>
        <option value="07">July</option>
        <option value="08">August</option>
        <option value="09">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">December</option>
    </select></td>
    <td width="5%" class="normal"><input name="year" value="<?php echo(date("Y")); ?>" type="text" size="4" maxlength="4" /></td>
	<td class="normal"><input name="submit" value="Go" type="submit" /></td>
    <input name="hid" value="salary_update" type="hidden" />
</form>
</tr>

<?php 
}
	elseif($message)
	{
		echo($message);
	}
	
	else
	{ 
	?>
<tr><td colspan="5"><?php echo($message);?></td></tr>
<tr><td colspan="5">
<table>
<tr><td><img src="Images/Welcomeimage.png"/></td></tr>
</table>
</td></tr>
	<?php 
	} 
	?>
</table>
<?php include("i_footer.php"); ?>
</body>
</html>