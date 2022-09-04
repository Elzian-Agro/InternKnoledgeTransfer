<html>
<body>
<table border = 10 cellspacing = 5 cellpadding = 5 align = center>
<tr>
<th colspan = 4> Student Performance </th>
</tr>
<tr>
<th>  Name <th> Total <th> Average <th> Grade
</tr>
<?php
$name = "Abi";
$mark1 = 90;
$mark2 = 99;
$mark3 = 95;

$total = $mark1 + $mark2 + $mark3;
$average = $total/3;

if ($average > 80)
	$grade = "Distinction";
else if ($average > 70)
	$grade = "Credit";
else if ($average > 60)
	$grade = "Merit Pass";
else
	$grade = "Fail";

echo "<tr><th>",$name,"<th>",$total,"<th>",$average,"<th>",$grade,"</tr>";
?>
</table>
</body>
</html>