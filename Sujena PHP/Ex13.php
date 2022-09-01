<html>
<body>
<?php
$number=array(560, 740, 404, 910, 890, 2124);
print_r($number);
echo"<br>";

echo "Current Data is :" , current($number),"<br>";
echo "Next Data is :" , next($number),"<br>";
echo "Previous Data is :" , prev($number),"<br>";
echo "End Data is :" , end($number),"<br>";
echo "Reseting Data is :","<br>";
reset($number);
echo "Current Data is :" , current($number),"<br>";

?>
</body>
</html>		