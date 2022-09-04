<html>
<body>
<table border = 10 cellspacing = 5 cellpadding = 5 align = center>
<tr><th>Integer<th>Square</tr>
<?php
$square = 0;
$count = 1;
while($count <= 10)
{
$square = $count * $count;
echo "<tr><th>",$count,"<th>",$square,"</tr>";
$count++;
}
?>
</table>
</body>
</html>