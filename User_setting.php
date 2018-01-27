<?php 
include('dbconnect.php');
include('check.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Setting - Payroll Register IITR</title>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php include("i_header.php"); ?>
<form name="change" method="post" action="User_setting.php" enctype="multipart/form-data" target="_self">

<?php

if(isset($_POST['submit']))
{
	$login_query = "select * from user where username = '$_SESSION[username]'";
		$login_result = mysql_query($login_query);
		$login_array = mysql_fetch_array($login_result);
		
		if($_POST['emp_oldpass'] == $login_array['password'])
		{
			$change = mysql_query("UPDATE user SET password = '$_POST[emp_newpass]' WHERE username = '$_SESSION[username]'");
			
			if($change)
			{
				echo "<h3 align='center'>Password change Sucessfull.</h3>";
			}
			else
			{
				echo "<h3 align='center'>Password change failed :".mysql_error()."</h3>";
			}
		}
        else
		{
			echo "<h3 align='center' style='color:#FF0000'>Old password did not match.</h3>";
		}
}
else
{
?>




<table width="800px" cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
    	<td class="big" align="left" >CHANGE PASSWORD</td>
    </tr>
    <tr><td class="normal" colspan="2" align="center"><hr align="center" width="98%" color="#666666" noshade="noshade" size="2" /></td></tr>
    <tr>
    	<td width="45%">
		<table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="50%" align="center">OLD PASSWORD</td>
				<td class="normal" width="50%"><input name="emp_oldpass" type="password" class="normal" id="emp_oldpass" size="20" maxlength="40" /></td>
            </tr>
			<tr>
            	<td class="normal" align="center">NEW PASSWORD</td>
            	<td class="normal"><input name="emp_newpass" type="password" class="normal" id="emp_newpass" size="20" maxlength="40"/></td>
            </tr>
            <tr>
            	<td class="normal" align="center">CONFIRM PASSWORD</td>
            	<td class="normal"><span id="spryconfirm1">
            	  <input name="emp_conf" type="password" class="normal" id="emp_conf" size="20" maxlength="40" />
            	  <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
            </tr>
            </td></tr>
            

	<td class="normal" colspan="2" align="center"><input name="submit" type="submit" class="normal" onclick="MM_validateForm('emp_oldpass','','R','emp_newpass','','R');return document.MM_returnValue" value="Submit" size="10" />
    </td>
</tr>
</table>
<?php }?>
</form>
<?php include("i_footer.php"); ?>
<script type="text/javascript">
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "emp_newpass");
</script>
</body>
</html>