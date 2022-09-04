<html>
<body>
<table border = 10 cellspacing = 5 cellpadding = 5 align = center>
<tr><th colspan = 3 > Student Details</tr>
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
echo"<tr><th>","ID","<th>","Name","<th>","Fees","</tr><br>";
echo "<tr><th>",$this->myid,"<th>",$this->myname,"<th>",$this->myfees,"</tr><br>";
}
}

$obj1 = new A();			
$obj1->setData("1234","Abi",15000);
$obj1->printData();
?>
</body>
</html>