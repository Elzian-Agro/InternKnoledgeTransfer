<html>
<body>
<?php
class A
{
var $mydata;				//attribute decalaration

function setData($data)		//method decalaration
{
$this->mydata = $data;		//assign parameter to attribute
}

function printData()
{
echo "My String Data is : " , $this->mydata;
}
}

$obj1 = new A();			//object decalaration
$obj1->setData("PhP MySql");//Calling "setData()" Method 
$obj1->printData();
?>
</body>
</html>