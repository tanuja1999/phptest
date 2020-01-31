<html>
<body>
<?php
$cars = array("Volvo","BMW","Toyota");
sort($cars);

$clenght = count($cars);
for ($x=0;$x < $clenght; $x++)
{
    echo $cars[$x];
    echo "<br>";
}
?>
</body>
</html>
