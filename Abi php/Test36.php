<html>
<body>
<?php
class Employee
{
var $id, $name, $salary, $n_salary, $allowance, $tax;

function setData($emp_id, $emp_name, $emp_salary)
{
$this -> id = $emp_id;
$this -> name = $emp_name;
$this -> salary = $emp_salary;
}

function calculation()
{
if($this -> salary > 100000)
{	
  $this->allowance = $this ->salary * 0.1;
  $this->tax = $this ->salary * 0.02;
}

else if ($this ->salary > 80000)
{
  $this->allowance = $this ->salary * 0.07;
  $this->tax = $this->salary * 0.01;
}
else if ($this->salary > 60000)
{
  $this->allowance = $this ->salary * 0.04;
  $this->tax = 0;
}
else
{
$this->allowance = $this ->salary * 0.02;
$this->tax =0;
}

$this->n_salary = $this->salary + $this->allowance - $this->tax;
}

function printData()
{
echo "<table border = 10 cellspacing = 5 cellpadding = 5 align = center>";
echo "<tr>" ;
echo "<th colspan = 6 > Employee Details
</tr>";
echo "<tr>";
echo "<th>Employee Id <th> Employee Name <th> Salary <th> Allowance <th> Tax <th> Net Salary 
</tr>";
echo "<tr><th>" , $this ->id ,"<th>",$this ->name,"<th>", $this ->salary,"<th>", $this ->allowance , "<th>", $this->tax, "<th>", $this->n_salary,"</tr>"; 
}
}

$obj1 = new Employee();  //object declaration
$obj1 -> setData("101A", "Hamshika", 150000.00);  //Calling "setData()" Method
$obj1 -> calculation();
$obj1-> printData();
?>
</body>
</html>