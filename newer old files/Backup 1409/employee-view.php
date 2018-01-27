<html>
<head></head>
<body>
<form name="input1" method="post" action="employee-edit.php" enctype="text/plain" target="_self">
<table width="1000px" cellpadding="2" cellspacing="2" border="0" align="center">
	<tr>
    	<td class="normal" width="50%">
		<table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="50%">Name</td>
				<td class="normal" width="50%"><input type="text" disabled="disabled" size="20" maxlength="40" class="normal" name="emp_name" value="<?php echo($emp_array['emp_name']); ?>"/></td>
            </tr>
			<tr>
            	<td class="normal">Designation</td>
            	<td class="normal"><input type="text" disabled="disabled" size="20" maxlength="40" class="normal" name="emp_desig" value="<?php echo($emp_array['emp_desig']); ?>"/></td>
            </tr>
            <tr>
            	<td class="normal">Employee No. </td>
            	<td class="normal"><input type="text" disabled="disabled" size="20" maxlength="40" class="normal" name="emp_no" value="<?php echo($emp_array['emp_no']); ?>" /></td>
            </tr>
            <tr>
            	<td class="normal">Bank Account No.</td>
            	<td class="normal"><input type="text" disabled="disabled" size="30" maxlength="40" class="normal" name="emp_bankacno" value="<?php echo($emp_array['emp_bankacno']); ?>"/></td>
            </tr>
            <tr>
            	<td class="normal">Pension Scheme</td>
                <td>
                	<input type="text" disabled="disabled" name="pen_sch" value="<?php echo($emp_array['pen_sch']); ?>" />
                </td>
            </tr>
        </table>
        </td>
        <td class="normal" width="50%">
        
        
        <table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="40%">Date Of Joining</td>
            	<td class="normal" width="60%"><input type="text" disabled="disabled" size="20" maxlength="40" class="normal" name="date_join" value="<?php echo($emp_array['date_join']); ?>"/></td>
            </tr>
            <tr>
            	<td class="normal">Date Of Birth</td>
            	<td class="normal"><input type="text" disabled="disabled" size="20" maxlength="40" class="normal" name="date_birth" value="<?php echo($emp_array['date _birth']); ?>" /></td>
            </tr>
            <tr>
            	<td class="normal">Joined In Scheme</td>
            	<td class="normal"><input type="text" disabled="disabled" size="20" maxlength="40" class="normal" name="emp_jis" value="<?php echo($emp_array['emp_jis']); ?>"/></td>
            </tr>
            <tr>
            	<td class="normal">Category</td>
            	<td class="normal">
            		<input type="text" disabled="disabled" name="emp_category" value="<?php echo($emp_array['emp_category']); ?>" /> 
            	</td>
            </tr>
	    </table>
        </td>
	</tr>
</table>
</td></tr>
<tr>
	<td class="normal"><hr align="center" width="98%" color="#666666" noshade="noshade" size="2" /></td>
</tr>
<tr>
	<td class="normal" align="center"><input type="submit" size="10" class="normal" name="submit" value="Edit" /></td>
</tr>
</form>