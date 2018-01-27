<?php 

$payroll_query = "select * from payroll order by emp_no asc";
$payroll_result = mysql_query($payroll_query);
while($payroll_array = mysql_fetch_array($payroll_result))
{

echo "<a href=\"index.php?emp_no=$payroll_array[emp_no]\"><td>".$payroll_array[emp_no]."</td></a>";

}                            

?>