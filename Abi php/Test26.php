<html>
<body>
<?php
$names = array("BBB","ccc","KKK","EEEE","eeee");

echo "Unsorted Array List<br>";
print_r($names);

echo "<br><br>Sorted Array List - Ascending Sequence<br>";
sort($names);
print_r($names);

echo "<br><br>Sorted Array List - Descending Sequence<br>";
rsort($names);
print_r($names);

?>
</body>
</html>