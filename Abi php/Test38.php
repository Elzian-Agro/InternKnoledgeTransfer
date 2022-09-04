<html>
<body>
<?php
class Employee
{
var $name, $h_work, $h_rate, $g_salary, $tax, $n_salary;

function __construct($name, $h_work, $h_rate)
{
$this -> name = $name;
$this -> h_work = $h_work;
$this ->h_rate = $h_rate;

}

function calculation()
{
if($this->h_work>50)
	$this->g_salary = (($this->h_work-50)*3*$this->h_rate) + ((50-40)*2*$this->h_rate) + (40*$this->h_rate);
else if($this->h_work>40)
	$this->g_salary = (($this->h_work-40)*2*$this->h_rate) + (40*$this->h_rate);
else
	$this->g_salary = $this->h_work*$this->h_rate;
	
if($this->g_salary>200000)
	$this->n_salary = $this->g_salary - ($this->g_salary*0.01);
else
	$this->n_salary = $this->g_salary;
}

function printEmpData()
{
echo "<table border = 10 cellspacing = 5 cellpadding = 5 align = center>";
echo "<tr><th colspan = 6>Employee Details </tr>";
echo "<tr><th>Name<th>Hours work<th>Hours Rate<th>Gross Salary<th>Net Salalry</tr>";
echo "<tr><th>", $this ->name, "<th>", $this ->h_work, "<th>", $this ->h_rate, "<th>", $this ->g_salary,"<th>", $this ->n_salary,"</tr>";
echo "</table>";
}
}

$obj1 = new Employee("Abi", 60, 4000);  
$obj1-> calculation();
$obj1-> printEmpData();
?>
</body>
</html>