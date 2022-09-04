<html>
<body>
<?php
$number = array(56,74,44,91,89);

echo "Unsorted Array List<br>";
print_r($number);

echo "<br><br>Sorted Array List - Ascending Sequence<br>";
sort($number);
print_r($number);

echo "<br><br>Sorted Array List - Descending Sequence<br>";
rsort($number);
print_r($number);

?>
</body>
</html>