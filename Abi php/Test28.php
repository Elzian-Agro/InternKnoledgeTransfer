<html>
<body>
<?php
$package = array("Word","Excel","Access","C++","Java");

$subarray = array_slice($package,1,3);
		//array_slice(<Array Name>,<Start Index>, <Number of Elements>);
		

foreach($subarray as $mysub)
{
echo "Subjects" ,$mysub,"<br>";
}

?>
</body>
</html>