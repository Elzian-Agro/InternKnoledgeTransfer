<html>
<body>
<table border = 10 cellspacing = 5 cellpadding = 5 align = center>
<tr>
<th>  Name <th> Average <th> Grade
</tr>
<?php
$name = "Abi";
$average = 90;

if ($average > 80)
	$grade = "Distinction";
else if ($average > 70)
	$grade = "Credit";
else if ($average > 60)
	$grade = "Merit Pass";
else
	$grade = "Fail";
	
echo "Name : ", $name, "<br>";
echo "Average : ", $average, "<br>";
echo "Grade : ", $grade;


echo "<tr><th>",$firstname,"<th>",$average,"<th>",$grade,"</tr>";
?>
</table>
</body>
</html>