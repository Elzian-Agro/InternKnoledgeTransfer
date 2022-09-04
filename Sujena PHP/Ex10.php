<html>
<body>
<?php
$marks = array(96, 85, 70, 89, 50);
$total = 0;


foreach($marks as $mark)
{
$total = $total + $mark;
}

$average = $total / 5.0;
echo "Total Marks: ", $total, "<br>";
echo "Average Marks : ", $average, "<br>";

?>
</body>
</html>