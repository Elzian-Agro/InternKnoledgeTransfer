<html>
<body>
<h1> Navigating Through Array </h1>
<?php
$number = array(100,200,300,400,500,600);
print_r($number);
echo"<br>";

echo "Current : ",current($number),"<br>";
echo "Next : ",next($number),"<br>";
echo "Previous : ",prev($number),"<br>";
echo "End : ",end($number),"<br>";
echo "Resetting the array <br>";
reset($number);
echo "Current : ",current($number),"<br>";
?>
</body>
</html>