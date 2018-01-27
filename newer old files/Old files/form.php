<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<title>Untitled Document</title>
</head>

<body>
<form id="primaryinput" name="primaryinput" method="post" action="" enctype="text/plain" target="_self" title="">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
    	<td class="normal" width="50%">
		<table width="650" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
			<tr>
            	<td width="250" class="normal">Name</td>
				<td class="normal"><input type="text" class="normal" name="name" id="name" size="20" maxlength="40" value="<?php echo "name"; ?>"/></td>
            </tr>
			<tr>
            	<td class="normal">Designation</td>
            	<td class="normal"><input type="text" class="normal" name="desig" id="desig" /></td>
            </tr>
            <tr>
            	<td class="normal">Employee No. </td>
            	<td class="normal"><input type="text" class="normal" name="empno" id="empno" /></td>
            </tr>
            <tr>
            	<td class="normal">Bank Account No.</td>
            	<td class="normal"><input type="text" class="normal" name="acno" id="bank_acno" size="30" maxlength="40" /></td>
            </tr>
        </table>
        </td>
        <td class="normal" width="50%">
        <table width="650" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
            	<td class="normal" width="150">Date Of Joining</td>
            	<td class="normal"><input type="text" class="normal" name="date_join" id="date_join" /></td>
            </tr>
            <tr>
            	<td class="normal">Date Of Birth</td>
            	<td class="normal"><input type="text" class="normal" name="date_birth" id="date_birth" /></td>
            </tr>
            <tr>
            	<td class="normal">Joined In Scheme</td>
            	<td class="normal"><input type="text" class="normal" name="gis" id="gis" /></td>
            </tr>
            <tr>
            	<td class="normal">Category</td>
            	<td class="normal">
            		<input type="radio" name="Class A" id="A" value="A" /> Class A &nbsp;
            		<input type="radio" name="Class B" id="B" value="B" /> Class B &nbsp;
            		<input type="radio" name="Class C" id="C" value="C" /> Class C &nbsp;
            		<input type="radio" name="Class D" id="D" value="D" /> Class D &nbsp;
            		<input type="radio" name="Class E" id="E" value="E" /> Class E &nbsp;
            	</td>
            </tr>
	    </table>
        </td>
	</tr>
</table>
            
            
            
            <hr /> <!-- The END OF ONE SET OF VALUES -->
            
<table width="1316">
	<tr>
    	<td class="normal" width="438" align="center">PAY AND ALLOWANCES</td>
        <td class="normal" width="438" align="center">DEDUCTIONS</td>
    </tr>
    <tr>
        <td class="normal" align="center">
        <table width="439" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            <tr>
        	    <td class="normal" width="45%">Basic Pay</td>
            	<td class="normal"><input type="text" class="normal" name="basic" id="basic" /></td>
            </tr>
            <tr>
            	<td class="normal">Grade Pay</td>
            	<td class="normal"><input type="text" class="normal" name="grade" id="grade" /></td>
            </tr>
            <tr>
            	<td class="normal">Personal Pay</td>
            	<td class="normal"><input type="text" class="normal" name="personal" id="personal" /></td>
            </tr>
            <tr>
            	<td class="normal">Other Allowance</td>
            	<td class="normal"><input type="text" class="normal" name="other" id="other" /></td>
            </tr>
            <tr>
            	<td class="normal">Washing Allowance</td>
            	<td class="normal"><input type="text" class="normal" name="washing" id="washing" /></td>
            </tr>
            <tr>
            	<td class="normal">Conveyance Allowance</td>
            	<td class="normal"><input type="text" class="normal" name="conveyance" id="conveyance" /></td>
            </tr>
            <tr>
            	<td class="normal">TPT. Allowance</td>
            	<td class="normal"><input type="text" class="normal" name="tpt" id="tpt" /></td>
            </tr>
            <tr>
            	<td class="normal">Lib. Incentive</td>
            	<td class="normal"><input type="text" class="normal" name="lib" id="lib" /></td>
            </tr>
            <tr>
            	<td class="normal">Int. Relief</td>
            	<td class="normal"><input type="text" class="normal" name="relief" id="relief" /></td>
            </tr>
            <tr>
            	<td class="normal">&nbsp;</td>
                <td class="normal">&nbsp;</td>
            </tr>
            <tr>
            	<td class="normal">&nbsp;</td>
                <td class="normal">&nbsp;</td>
            </tr>
            <tr>
            	<td class="normal">&nbsp;</td>
                <td class="normal">&nbsp;</td>
            </tr>
            <tr>
            	<td class="normal">&nbsp;</td>
                <td class="normal">&nbsp;</td>
            </tr>
            <tr>
            	<td class="normal">&nbsp;</td>
                <td class="normal">&nbsp;</td>
            </tr>
            <tr>
            	<td class="normal">&nbsp;</td>
                <td class="normal">&nbsp;</td>
            </tr>
            </table>
            </td>
            <td class="normal" align="center">
            <table width="878">
            	<tr>
                	<td class="normal">
            		<table width="439" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
            			<tr>
                        	<td class="normal" width="45%">GPF</td>
            				<td class="normal"><input type="text" class="normal" name="GPF" id="GPF" /></td>
                        </tr>
            			<tr>
            				<td class="normal">GPF Loan</td>
            				<td class="normal"><input type="text" class="normal" name="GPFloan" id="GPFloan" /></td>
                        </tr>
            			<tr><td class="normal">NPS</td>
                     	   <td class="normal"><input type="text" class="normal" name="NPS" id="NPS" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">NPS Loan</td>
                        	<td class="normal"><input type="text" class="normal" name="NPSloan" id="NPSloan" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">L.I.C. SRE.</td>
                        	<td class="normal"><input type="text" class="normal" name="lic" id="lic" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">RDS</td>
                        	<td class="normal"><input type="text" class="normal" name="RDS" id="RDS" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">GIS</td>
                        	<td class="normal"><input type="text" class="normal" name="GIS" id="GIS" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">Association</td>
                        	<td class="normal"><input type="text" class="normal" name="association" id="association" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">Misc Recovery</td>
                        	<td class="normal"><input type="text" class="normal" name="recovery" id="recovery" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">Mandir.</td>
                        	<td class="normal"><input type="text" class="normal" name="mandir" id="mandir" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">Vehicle Bill</td>
                        	<td class="normal"><input type="text" class="normal" name="vbill" id="vbill" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">Vehicle Advance</td>
                        	<td class="normal"><input type="text" class="normal" name="v_advance" id="v_advance" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">Wheat Advance</td>
                        	<td class="normal"><input type="text" class="normal" name="w_advance" id="w_advance" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">Festival Advance</td>
                        	<td class="normal"><input type="text" class="normal" name="f_advance" id="f_advance" /></td>
                        </tr>
					</table>
                    </td>
            
                    <td class="normal">
                    <table width="439" align="center" cellpadding="2" cellspacing="0" border="1" bgcolor="#CCCCCC" bordercolor="#999999">
                    	<tr>
                        	<td class="normal" width="45%">Bank Loan</td>
                    		<td class="normal"><input type="text" class="normal" name="b_loan" id="b_loan" /></td>
                        </tr>
                    	<tr>
                        	<td class="normal">Telephone</td>
                    		<td class="normal"><input type="text" class="normal" name="telephone" id="telephone" /></td>
                    	</tr>
                        <tr>
                        	<td class="normal">House Loan</td>
                        	<td class="normal"><input type="text" class="normal" name="h_loan" id="h_loan" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">Computer Loan</td>
                        	<td class="normal"><input type="text" class="normal" name="c_loan" id="c_loan" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">House Rent</td>
                        	<td class="normal"><input type="text" class="normal" name="h_rent" id="h_rent" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">Garage Rent</td>
                        	<td class="normal"><input type="text" class="normal" name="g_rent" id="g_rent" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">Electricity</td>
                        	<td class="normal"><input type="text" class="normal" name="electricity" id="electricity" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">Water Charges</td>
                        	<td class="normal"><input type="text" class="normal" name="w_charge" id="w_charge" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">Meter Rent</td>
                        	<td class="normal"><input type="text" class="normal" name="m_rent" id="m_rent" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">Furniture Rent</td>
                        	<td class="normal"><input type="text" class="normal" name="f_rent" id="f_rent" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">Income Tax</td>
                        	<td class="normal"><input type="text" class="normal" name="i_tax" id="i_tax" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">Rev. Stamp</td>
                        	<td class="normal"><input type="text" class="normal" name="r_stamp" id="r_stamp" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">Extra PF. Subscription</td>
                        	<td class="normal"><input type="text" class="normal" name="e_pf_subs" id="e_pf_subs" /></td>
                        </tr>
                        <tr>
                        	<td class="normal">Misc Recovery</td>
                        	<td class="normal"><input type="text" class="normal" name="m_recovery" id="m_recovery" /></td>
                        </tr>
                    </table>
            		</td>
            	</tr>
            </table>
		</td>
	</tr>
</table>
</form>
</body>
</html>
