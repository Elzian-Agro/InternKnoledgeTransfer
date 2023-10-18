<html>
<body>
<table border = 5 cellspacing = 5 cellpadding = 5 align = center>
<caption> Marks Analysis </caption>
<tr><th> Marks1 <th> Marks2 <th> Marks3 <th> Marks4 <th> Marks5 <th> Total <th> Average</tr>
<?php
$marks = array(70,68,72,81,85);

$total = array_sum($marks);
$average = $total/count($marks);

echo "<tr>";
$x = 0;
while($x<count($marks))
{
echo "<th>",$marks[$x];
$x++;
}

echo "<th>",$total,"<th>",$average,"</tr>";

?>
</table>
</body>
</html>