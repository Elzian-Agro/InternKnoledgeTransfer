<html>
<body>
<?php
class Vehicle
{
var $vehno , $price, $m_year;

function __construct($vno,$pr,$year)
{
$this->vehno = $vno;
$this->price = $pr;
$this->m_year = $year;
}

function printVehicleData()
{
echo "<table border = 10 cellspacing = 5 cellpadding = 5 align = center>";
echo "<tr><th colspan = 3> Vehicle Details </tr>";
echo "<tr><th>Numbrer<th>Price<th>Manufactured Year</tr>";
echo "<tr><th>",$this->vehno,"<th>",$this->price,"<th>",$this->m_year,"</tr>";
echo "</table>";
}
}

$obj1 = new Vehicle("WP CAA 4494",1000000,2019);
$obj1->printVehicleData();
?>
</body>
</html>

