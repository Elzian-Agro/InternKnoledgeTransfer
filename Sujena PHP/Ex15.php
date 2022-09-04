<html>
<body>
<?php
class Employee
{
var $employee_id, $name, $b_salary,  $allowance, $tax, $n_salary;

function setEmpData($employee_id, $name, $b_salary)
{
$this->employee_id = $employee_id;
$this->name = $name;
$this->b_salary = $b_salary;
}

function calculation()
{
if($this->b_salary>100000)
{
   $this->allowance = $this->b_salary*0.1;
	$this->tax = $this->b_salary*0.02;
}
else if($this->b_salary>80000)
{
   $this->allowance = $this->b_salary*0.08;
	$this->tax = $this->b_salary*0.01;
}
else if($this->b_salary>50000)
{
   $this->allowance = $this->b_salary*0.05;
	$this->tax= 0;
}
else
{
   $this->allowance = $this->b_salary*0.02;
	$$this->tax = 0;
}

$this->n_salary = $this->b_salary + $this->allowance - $this->tax;
}

 function printEmpData()
{
echo "<table border = 10 cellspacing = 5 cellpadding = 5 align = center>";
echo "<tr>";
echo "<th colspan=8>Employee Details</th>";
echo "</tr>";
echo "<tr>";
echo "<th>ID <th>Name<th>Basic Salary <th>Allownace <th>Tax <th>Net Salary";
echo "</tr>";


echo "<tr><th>",$this->employee_id,"<th>",$this->name,"<th>",$this->b_salary,"<th>",$this->allowance,"<th>",$this->tax,"<th>",$this->n_salary,"</tr>";

}
}

$obj1 = new Employee();						
$obj1->setEmpData("2124", "Sujina", 500000.00); 	
$obj1->calculation();
$obj1->printEmpData();
?>
</body>
</html>
