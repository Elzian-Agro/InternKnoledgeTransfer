<html>
<body>
<table border = 10 cellspacing = 5 cellpadding = 5 align = center>
<tr>
<th colspan = 5> Employee Details </th>
</tr>
<tr>
<th>  Name <th> Basic Salary <th> Allowance <th> Tax <th> Net Salary
</tr>
<?php
$name = "Abi";
$basicSal = "200000";


if ($basicSal > 100000)
	$allowance = $basicSal * 0.1;
	$tax = $basicSal * 0.02;
	
if ($basicSal > 80000)
	$allowance = $basicSal * 0.07;
	$tax = $basicSal * 0.01;
	
if ($basicSal > 60000)
	$allowance = $basicSal * 0.04;
	
	
if ($basicSal > 40000)
	$allowance = $basicSal * 0.02;
	
	
$netSal = $basicSal + $tax;

echo "<tr><th>",$name,"<th>",$basicSal,"<th>",$allowance,"<th>",$tax,"<th>",$netSal,"</tr>";
?>
</table>
</body>
</html>