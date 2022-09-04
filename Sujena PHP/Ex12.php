<html>
<body>
<?php
$names=array("BBBB", "kkkk", "SSSS", "eeee");

echo"UnSorted Array List<br>";
print_r($names);

echo "<br><br>Sorted Array List - Asecending Sequence<br>";
sort($names);
print_r($names);

echo "<br><br>Sorted Array List - Descending Sequence<br>";
rsort($names);
print_r($names);

?>
</body>
</html>
