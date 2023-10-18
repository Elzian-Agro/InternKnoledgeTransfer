<html>
<body>
<?php
$marks = array(70,68,72,81,85);
$total = 0;

$x = 0;
while($x<count($marks))
{
$total = $total + $marks[$x];
$x++;
}

$average = $total/5.0;

echo "Total Marks : ", $total, "<br>","Average Marks :",$average;

?>
</body>
</html>