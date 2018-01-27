<?php
include("dbconnect.php");
include("check.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Employee - Payroll Register IITR</title>
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
</head>

<body>
<?php include("i_header.php"); ?>
<form action="home.php" method="post" enctype="multipart/form-data" name="input" target="_self" onsubmit="MM_validateForm('emp_name','','R','emp_desig','','R','emp_no','','RisNum','emp_bankacno','','RisNum','y1','','RisNum','m1','','RisNum','d1','','RisNum','y2','','RisNum','m2','','RisNum','d2','','RisNum','y3','','RisNum','m3','','RisNum','d3','','RisNum');return document.MM_returnValue">
<table width="800px" cellpadding="0" cellspacing="0" border="0" align="center">
	<tr>
    	<td class="big" align="left">Create a new employee</td>
    </tr>
    <tr><td class="normal" colspan="2" align="center"><hr align="center" width="98%" color="#666666" noshade="noshade" size="2" /></td></tr>
    <tr>
    	<td width="45%">
		<table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="50%">Name</td>
				<td class="normal" width="50%"><input name="emp_name" type="text" class="normal" id="emp_name" size="20" maxlength="40" /></td>
            </tr>
			<tr>
            	<td class="normal">Designation</td>
            	<td class="normal"><input name="emp_desig" type="text" class="normal" id="emp_desig" size="20" maxlength="40"/></td>
            </tr>
            <tr>
            	<td class="normal">Employee No. </td>
            	<td class="normal"><input name="emp_no" type="text" class="normal" id="emp_no" size="20" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal">Bank Account No.</td>
            	<td class="normal"><input name="emp_bankacno" type="text" class="normal" id="emp_bankacno" size="25" maxlength="40" /></td>
            </tr>
            <tr>
            	<td class="normal">Pension Scheme</td><td class="normal">
                	<input type="radio"  required="required" name="pen_sch" value="gpf" /> GPF &nbsp;
            		<input type="radio"  required="required" name="pen_sch" value="nps" /> NPS
                </td>
            </tr>
        </table>
        </td>
        
        
        
        <td width="55%">
        <table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="40%">Date Of Birth</td>
            	<td class="normal" width="60%">
                <!--for date of birth-->
                
              <input name="y1" type="text" class="normal" id="y1" value="yyyy" size="4" maxlength="4" />/<input name="m1" type="text" class="normal" id="m1" value="mm" size="2" maxlength="2" />/<input name="d1" type="text" class="normal" id="d1" value="dd" size="2" maxlength="2" /></td>
            </tr>
            <tr>
            	<td class="normal">Date of Appointment</td>
                
            	<td class="normal">
                <!--for appointment date-->
              <input name="y2" type="text" class="normal" id="y2" value="yyyy" size="4" maxlength="4" />/<input name="m2" type="text" class="normal" id="m2" value="mm" size="2" maxlength="2" />/<input name="d2" type="text" class="normal" id="d2" value="dd" size="2" maxlength="2" /></td>
          </td>
            </tr>
            <tr>
            	<td class="normal">Joined In Scheme (GIS)</td>
            	<td class="normal">
                <!--for scheme date-->
              <input name="y3" type="text" class="normal" id="y3" value="yyyy" size="4" maxlength="4" />/<input name="m3" type="text" class="normal" id="m3" value="mm" size="2" maxlength="2" />/<input name="d3" type="text" class="normal" id="d3" value="dd" size="2" maxlength="2" /></td>
            </tr>
            <tr>
            	<td class="normal">Category</td>
            	<td class="normal">
                <select name="emp_category" >
                    <option value="A">Class A</option>
                    <option value="B">Class B</option>
                    <option value="C">Class C</option>
                    <option value="D">Class D</option>
                    <option value="E">Class E</option>
                    <option value="F">Class F</option>
                    <option value="G">Class G</option>
                    <option value="H">Class H</option>
                </select></td>
            </tr>
            <tr><td class="normal">Residing Status</td>
            <td class="normal"><input type="radio" name="res_status" value="residing" required="required" />Residing  &nbsp;<input type="radio" name="res_status" value="non-residing" required="required" />Non - Residing</td></tr>
	    </table>
</td></tr>
<tr><td class="normal" colspan="2" align="center"><hr align="center" width="98%" color="#666666" noshade="noshade" size="2" /></td></tr>
<tr>
	<td class="normal" colspan="2" align="center"><input type="submit" size="10" class="normal" name="nu_employee" value="Submit" />
    <input type="hidden" name="hid" value="nu_employee" /></td>
</tr>
</table>
</form>
<?php include("i_footer.php"); ?>
</body>
</html>