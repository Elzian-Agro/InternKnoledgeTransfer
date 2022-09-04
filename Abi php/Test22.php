<html>
<body>
<?php
$marks = array(70,68,72,81,85);
$total = 0;

foreach($marks as $mark)
{
$total = $total + $mark;
}

$average = $total/5.0;

echo "Total Marks : ", $total, "<br>","Average Marks :",$average;

?>
</body>
</html>