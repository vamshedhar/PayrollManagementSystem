<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Full display page</title>
</head>
<body>
<table cellpadding="4" width="100%">											<!-- The main page table -->
<tr><td width="100%">
<?php $i = 0;
$j=0;
$k=0;
$l=0;
while($i<=2)
{$j=0;
 $i++;
?>
	<table cellpadding="4" width="100%">										<!-- The table of output -->
    <tr><td width="100%">
    <?php echo "details of the entire campus"; 
	while($j<=2)
	{$k=0;
	 $j++;
	?>
    	<table cellpadding="4" width="100%">									<!-- The table of categories -->
        <tr><td width="100%">
        <?php echo "details of the different categories";
		while($k<=2)
		{$l=0;
		$k++;
		?>
        	<table cellpadding="4" width="100%">								<!-- The table of persons -->
        	<tr><td width="100%">
            <?php echo "details of each person as separate tables"; 
			while($l<=2)
			{
			?>
                <table cellpadding="4" width="100%">							<!-- The table according to date of a person -->
                <tr><td width="100%">
				<?php $l++;
				echo "details of the person order by date and year";?>
                </td></tr>
                </table>
            <?php
			} 
			?>
            </td></tr>
            </table>
        <?php
		} 
		?>
        </td></tr>
        </table>
    <?php 
	} 
	?>
    </td></tr>
    </table>
<?php 
} 
?>
</td></tr>
</table>

</body>
</html>
