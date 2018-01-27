<form id="primaryinput" name="primaryinput" method="post" action="formsubmit.php" enctype="text/plain" target="_self" title="">
<table width="1000px" cellpadding="2" cellspacing="2" border="0" align="center">
	<tr>
    	<td class="normal" width="50%">
		<table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="50%">Name</td>
				<td class="normal" width="50%"><input type="text" size="20" maxlength="40" class="normal" name="emp_name" value="<?php echo($emp_array['emp_name']); ?>"/></td>
            </tr>
			<tr>
            	<td class="normal">Designation</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="emp_desig" value="<?php echo($emp_array['emp_desig']); ?>"/></td>
            </tr>
            <tr>
            	<td class="normal">Employee No. </td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="emp_no" value="<?php echo($emp_array['emp_no']); ?>" /></td>
            </tr>
            <tr>
            	<td class="normal">Bank Account No.</td>
            	<td class="normal"><input type="text" size="30" maxlength="40" class="normal" name="emp_bankacno" value="<?php echo($emp_array['emp_bankacno']); ?>"/></td>
            </tr>
        </table>
        </td>
        <td class="normal" width="50%">
        
        
        <table width="100%" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="40%">Date Of Joining</td>
            	<td class="normal" width="60%"><input type="text" size="20" maxlength="40" class="normal" name="date_join" value="<?php echo($emp_array['date_join']); ?>"/></td>
            </tr>
            <tr>
            	<td class="normal">Date Of Birth</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="date_birth" value="<?php echo($emp_array['date _birth']); ?>" /></td>
            </tr>
            <tr>
            	<td class="normal">Joined In Scheme</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="emp_jis" value="<?php echo($emp_array['emp_jis']); ?>"/></td>
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
	    </table>
        </td>
	</tr>
</table>
            
            
            
            <hr /> <!-- The END OF ONE SET OF VALUES -->
            
        <table width="1000px" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
    			<td class="normal" align="center" colspan="2">PAY AND ALLOWANCES</td>
                <td width="2%" rowspan="20"></td>
        		<td class="normal" align="center" colspan="5">DEDUCTIONS</td>
    		</tr>
            <tr>
        	    <td class="normal" width="16%">Basic Pay</td>
            	<td class="normal" width="16%"><input type="text" size="20" maxlength="40" class="normal" name="basic_pay" value="<?php echo($acc_array['basic_pay']); ?>" /></td>
                <td class="normal" width="16%">GPF</td>
                <td class="normal" width="16%"><input type="text" size="20" maxlength="40" class="normal" name="gpf" value="<?php echo($acc_array['gpf']); ?>" /></td>
                <td width="2%" rowspan="20"></td>
                <td class="normal" width="16%">Bank Loan</td>
                <td class="normal" width="16%"><input type="text" size="20" maxlength="40" class="normal" name="bank_loan"value="<?php echo($acc_array['bank_loan']); ?>" /></td>
            </tr>
            <tr>
            	<td class="normal">Grade Pay</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="grade_pay" value="<?php echo($acc_array['grade']); ?>" /></td>
                <td class="normal">GPF Loan</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="gpfloan" /></td>
                <td class="normal">Telephone</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="telephone" /></td>
            </tr>
            <tr>
            	<td class="normal">Personal Pay</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="personal_pay" value="<?php echo($acc_array['personal_pay']); ?>" /></td>
                <td class="normal">NPS</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="nps" /></td>
                <td class="normal">House Loan</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="h_loan" /></td>
            </tr>
            <tr>
            	<td class="normal">Other Allowance</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="other_allow" /></td>
                <td class="normal">NPS Loan</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="npsloan" /></td>
                <td class="normal">Computer Loan</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="c_loan" /></td>
            </tr>
            <tr>
            	<td class="normal">Washing Allowance</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="wash_allow" /></td>
                <td class="normal">L.I.C. SRE.</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="lic" /></td>
                <td class="normal">House Rent</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="h_rent" /></td>
            </tr>
            <tr>
            	<td class="normal">Conveyance Allowance</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="convey_allow" /></td>
                <td class="normal">RDS</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="rds" /></td>
                <td class="normal">Garage Rent</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="g_rent" /></td>
            </tr>
            <tr>
            	<td class="normal">TPT. Allowance</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="tpt" /></td>
                <td class="normal">GIS</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="gis" /></td>
                <td class="normal">Electricity</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="electricity" /></td>
            </tr>
            <tr>
            	<td class="normal">Lib. Incentive</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="lib_incen" /></td>
                <td class="normal">Association</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="association" /></td>
                <td class="normal">Water Charges</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="w_charge" /></td>
            </tr>
            <tr>
            	<td class="normal">Int. Relief</td>
            	<td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="relief" /></td>
                <td class="normal">Misc Recovery</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="recovery" /></td>
                <td class="normal">Meter Rent</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="m_rent" /></td>
            </tr>
            <tr>
            	<td class="normal">&nbsp;</td>
                <td class="normal">&nbsp;</td>
                <td class="normal">Mandir.</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="mandir" /></td>
                <td class="normal">Furniture Rent</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="f_rent" /></td>
            </tr>
            <tr>
            	<td class="normal">&nbsp;</td>
                <td class="normal">&nbsp;</td>
                <td class="normal">Vehicle Bill</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="vbill" /></td>
                <td class="normal">Income Tax</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="i_tax" /></td>
            </tr>
            <tr>
            	<td class="normal">&nbsp;</td>
                <td class="normal">&nbsp;</td>
                <td class="normal">Vehicle Advance</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="v_advance" /></td>
                <td class="normal">Rev. Stamp</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="r_stamp" /></td>
            </tr>
            <tr>
            	<td class="normal">&nbsp;</td>
                <td class="normal">&nbsp;</td>
                <td class="normal">Wheat Advance</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="w_advance" /></td>
                <td class="normal">Extra PF. Subscription</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="e_pf_subs" /></td>
            </tr>
            <tr>
            	<td class="normal">&nbsp;</td>
                <td class="normal">&nbsp;</td>
                <td class="normal">Festival Advance</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="f_advance" id="f_advance" /></td>
                <td class="normal">Misc Recovery</td>
                <td class="normal"><input type="text" size="20" maxlength="40" class="normal" name="m_recovery" id="m_recovery" /></td>
            </tr>    
		</table>
</td>
</tr>
<tr>
	<td class="normal"><hr align="center" width="98%" color="#666666" noshade="noshade" size="2" /></td>
</tr>
<tr>
	<td class="normal" align="center"><input type="submit" size="10" class="normal" name="submit" value="Submit" /></td>
</tr>
<input type="hidden" value="salary_bill" name="hid" />
</form>