<?php 
if(isset($_POST['hid']))
{
	/* Connecting to the database */
	include("dbconnect.php");
	
	if($_POST['hid'] == "nu_employee")
	{
		$insert_empquery = "INSERT INTO empdetails set emp_no = '$_POST[emp_no]', emp_name = '$_POST[emp_name]',  emp_desig = '$_POST[emp_desig]',  emp_bankacno = '$_POST[emp_bankacno]',  date_birth = '$_POST[date_birth]' , date_join = '$_POST[date_join]', date_appoint = '$_POST[date_appoint]', emp_jis = '$_POST[emp_jis]', emp_category = '$_POST[emp_category]', pen_sch = '$_POST[pen_sch]', res_status = '$_POST[res_status]'";
	mysql_query($insert_empquery) or die(mysql_error());
	}
	elseif($_POST['hid'] == "edit_employee")
	{
		$update_empquery = "update empdetails set emp_name = '$_POST[emp_name]', emp_desig = '$_POST[emp_desig]', emp_bankacno = '$_POST[emp_bankacno]', date_birth = '$_POST[date_birth]', date_join = '$_POST[date_join]', date_appoint = '$_POST[date_appoint]', emp_jis = '$_POST[emp_jis]', emp_category = '$_POST[emp_category]', pen_sch = '$_POST[pen_sch]', status = '$_POST[status]' where emp_no = '$_POST[emp_no]'";
	mysql_query($update_empquery) or die(mysql_error());
	}

}
else
{ echo "SORRY"; } ?>