<html>
<body>
<?php
$number = array(700,800,900,100,200,300);
$name = array("aaa","bbb","ccc","ddd","eeee","fff");

$main_array = array_merge($number,$name);

foreach($main_array as $mymain)
{
echo "Merge Data is : " ,$mymain,"<br>";
}

?>
</body>
</html>