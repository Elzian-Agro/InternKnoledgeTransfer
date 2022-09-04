<html>
<body>
<table border = 10 cellspacing = 5 cellpadding = 5 align = center>
<tr>
<th colspan=5>Emplyee Details </th>
</tr>
<tr>
<th>Name <th>Basic Salary <th>Allowance <th>Tax <th>Net Salary
</tr>
<?php
$name = "SK";
$b_salary = 200000.00;

if($b_salary>100000)
{
	$allowance = $b_salary * 0.1;
	$tax = $b_salary * 0.02;
}
else if($b_salary>80000)
{
	$allowance = $b_salary * 0.07;
	$tax = $b_salary * 0.01;
}
else if($b_salary>60000)
{
	$allowance = $b_salary * 0.04;
	$tax = 0;
}
else
{
	$allowance = $b_salary * 0.02;
	$tax = 0;
}

$n_salary = $b_salary + $allowance - $tax;

echo "<tr><th>",$name,"<th>",$b_salary,"<th>",$allowance,"<th>",$tax,"<th>",$n_salary,"</tr>";
?>
</table>
</body>
</html>
	