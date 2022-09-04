<html>
<body>
<?php
class Student
{
var $student_id, $name, $fees;

function setData($student_id, $name, $fees)
{
$this->student_id = $student_id;
$this->name = $name;
$this->fees = $fees;
}

function printData()
{
echo "Student ID : ", $this->student_id, "<br>";
echo "Student Name : ", $this->name, "<br>";
echo "Student Fees: ", $this->fees, "<br>";
}
}

$obj1 = new Student();						
$obj1->setData("2124", "Sujina", 5000.00); 	
$obj1->printData();
?>
</body>
</html>