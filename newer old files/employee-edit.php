<form name="primaryinput" method="post" action="home.php" enctype="text/plain" target="_self" title="">
<table width="1000px" cellpadding="2" cellspacing="2" border="0" align="center">
	<tr>
    	<td class="normal" width="50%">
		<table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="50%">Name</td>
				<td class="normal" width="50%"><input type="text" size="20" maxlength="40" class="normal" name="emp_name" value="<?php echo($_POST['emp_name']); ?>"/></td>
            </tr>
			<tr>
            	<td class="normal">Designation</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="emp_desig" value="<?php echo($_POST['emp_desig']); ?>"/></td>
            </tr>
            <tr>
            	<td class="normal">Employee No. </td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="emp_no" value="<?php echo($_POST['emp_no']); ?>" /></td>
            </tr>
            <tr>
            	<td class="normal">Bank Account No.</td>
            	<td class="normal"><input type="text" size="30" maxlength="40" class="normal" name="emp_bankacno" value="<?php echo($_POST['emp_bankacno']); ?>"/></td>
            </tr>
            <tr>
            	<td class="normal">
                	<input type="radio" name="pen_sch" value="gpf" /> GPF &nbsp;</td><td>
            		<input type="radio" name="pen_sch" value="nps" /> NPS
                </td>
            </tr>
        </table>
        </td>
        <td class="normal" width="50%">
        
        
        <table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="40%">Date Of Joining</td>
            	<td class="normal" width="60%"><input type="text" size="20" maxlength="40" class="normal" name="date_join" value="<?php echo($_POST['date_join']); ?>"/></td>
            </tr>
            <tr>
            	<td class="normal">Date Of Birth</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="date_birth" value="<?php echo($_POST['date _birth']); ?>" /></td>
            </tr>
            <tr>
            	<td class="normal">Joined In Scheme</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="emp_jis" value="<?php echo($_POST['emp_jis']); ?>"/></td>
            </tr>
            <tr>
            	<td class="normal">Category</td>
            	<td class="normal">
            		<input type="radio" name="emp_category" value="A" /> Class A &nbsp;
            		<input type="radio" name="emp_category" value="B" /> Class B &nbsp;
            		<input type="radio" name="emp_category" value="C" /> Class C &nbsp;
            		<input type="radio" name="emp_category" value="D" /> Class D &nbsp;
            		<input type="radio" name="emp_category" value="E" /> Class E &nbsp;
            	</td>
            </tr>
            <tr><td class="normal"><input type="radio" name="status" value="r" />&nbsp; Residing</td><td class="normal"><input type="radio" name="status" value="nr" />&nbsp; Non - Residing</td></tr>
	    </table>
        </td>
	</tr>
</table>
</td></tr>
<tr>
	<td class="normal"><hr align="center" width="98%" color="#666666" noshade="noshade" size="2" /></td>
</tr>
<tr>
	<td class="normal" align="center"><input type="submit" size="10" class="normal" name="submit" value="Submit" /><input type="hidden" name="hid" value="edit_employee" /></td>
</tr>
</form>