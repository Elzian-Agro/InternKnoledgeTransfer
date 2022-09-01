<html>
<body>
<table border = 10 cellspacing = 5 cellpadding = 5 align = center>
<tr>
<th>Integer <th>Triangle
</tr>
<?php
$square=0;
$count=1;
do    
{
$triangle = ($count*$count + $count)/2;
echo "<tr><th>",$count,"<th>",$triangle,"</tr>";
$count++;
}
while($count<=5)

?>
</table>
</body>
</html>

