<html>
<body>
<table border = 10 cellspacing = 5 cellpadding = 5 align = center>
<caption>Temperature Analysis </caption>
<tr><th>Temperature 1<th>Temperature 2<th>Temperature 3<th>Temperature 4<th>Temperature 5<th>Temperature 6<th>Temperature 7<th>Total Temperature<th>Average Temperature<th>Highest Temperature<th>Lowest Temperature
</tr>
<?php
$temperature = array(33.1, -3.8, 34.5, 20.07, 28.4, 30.2, 31.78);

$total = array_sum($temperature);
$average = $total/count($temperature);

echo "<tr>";
$x = 0;
$max = -99;
$min = 99;
while($x < count($temperature))
{
if($temperature[$x] > $max)
  $max = $temperature[$x];
if ($temperature[$x] < $min)
  $min = $temperature[$x];
echo "<th>", $temperature[$x];
$x++;
}

echo "<th>", $total, "<th>", $average, "<th>", $max, "<th>",$min, "</tr>";
?>
</table>
</body>
</html>
