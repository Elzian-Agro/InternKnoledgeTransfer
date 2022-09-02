<html>
<body>
<?php
foreach($_POST['country'] as $the_country)
{
echo $the_country, "<br>";
}

?>
</body>
</html>

<!--
foreach(<Reading Source> as <Writing Variable>)
{
	<Process>;
	<Process>;
}