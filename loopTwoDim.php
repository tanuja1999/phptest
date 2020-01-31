<html>
<body>
<?php
$cars = array
(
    array("Volvo",23,12),
    array("BMW",32,22),
    array("Saab",14,10),
    array("Land Lower",42,11)
);
for($row = 0; $row < 4; $row++)
{
echo "<p><b> Row Number$row </b></p>";
echo"<ul>";
for($col = 0; $col < 3; $col++)
{
echo"<li>" .$cars[$row][$col]."</li>";
}
echo"</ul>";
}

?>
</body>
</html>