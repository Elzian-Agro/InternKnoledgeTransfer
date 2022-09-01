<html>
<body>
<?php
$name = "Sujina";
$average = 85;

if($average>80)
	$grade = "Distinction";
else if($average>70)
	$grade = "Credit";
else if($average>60)
	$grade = "Merit Pass";
else
	$grade = "Fail";
	
echo "Name: " , $name, "<br>";
echo "Average is : " , $average, "<br>";
echo "Grade : " , $grade, "<br>";
?>
</body>
</html>