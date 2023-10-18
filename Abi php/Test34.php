<html>
<body>
<?php
class A
{
var $id,$name,$fees;				

function setData($id,$name,$fees)		
{
$this->myid = $id;		
$this->myname = $name;
$this->myfees = $fees;
}

function printData()
{
echo "My ID is : " , $this->myid,"<br>";
echo "My Name is : " , $this->myname,"<br>";
echo "My Fees is : " , $this->myfees,"<br>";
}
}

$obj1 = new A();			
$obj1->setData("1234","Abi",15000);
$obj1->printData();
?>
</body>
</html>