<?php 
include("dbconnect.php");
include("check.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>error</title>
<link rel="stylesheet" href="style.css" type="text/css" />
<style>
.hyperlink_err
{
	color:#F00;
	text-transform:capitalize;
	font-size:22px;
	
}
.big
{
	font-size:24px;

}


</style>

</head>

<body class="td">
<table align="center" width="100%" border="0" cellpadding="2" cellspacing="0">
<tr>
	<td>
    	<table align="center" width="1020px" border="0" cellpadding="0" cellspacing="0">
        	<tr>
            	<td class="normal" align="right" colspan="2">
                	<table align="center" width="100%" border="0" cellpadding="0" cellspacing="0">
                    	<tr>
                        	<td width="80%"></td>
                        	<td width="10%" class="normal"><a href="home.php" class="hyperlinktop">Home</a></td>
                            <td width="10%" class="normal"><a href="logout.php" class="hyperlinktop">Logout</a></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
            	<td colspan="2"><img border="0" src="Images/top.png" alt="Payroll Management System" height="200" width="1020"></td>
            </tr>
            <tr>
            	<td width="210px" valign="top"><?php include("i_leftbar.php"); ?></td>
                <td width="810px" style="vertical-align:top">

<table width="800px" cellpadding="0" cellspacing="0" border="0" align="center" style="vertical-align:top" >
	<tr>
    	<td class="big" align="left"><img src="Images/index.jpg" />Error Details</td>
    </tr>
    <tr><td class="normal" colspan="2" align="center"><hr align="center" width="98%" color="#666666" noshade="noshade" size="2"  /></td></tr>
    <tr>
    	<td width="45%" style="vertical-align:text-top; font-size:20px">
        <?php 
if($_GET['id'] == 1)
{    
	echo "<strong style='color:#FF0000' style='font-size:14px'>Entry yet to be done.<br/>Please click on the link to make the entry for the entered month</strong>"; ?>
	
    
<?php }
if($_GET['id'] == 2)
{
   echo "<strong style='color:#FF0000' style='font-size:14px'> Entry already exists.<br/>please click on the link to update the entry</strong>";?>
   
<?php
}
if($_GET['id'] == 3)
{
   	echo "No entry for ".$_POST['month']."/".$_POST['year']." of the employee ".$emp_array['emp_name']."--".$_POST['emp_no']." found."; ?>
<?php

}
?>

</td></tr>
<tr><td class="normal" colspan="2" align="center"><hr align="center" width="98%" color="#666666" noshade="noshade" size="2" /></td></tr>
<tr>
	
</tr>
</table>

<?php include("i_footer.php"); ?>
</body>
</html>