<html>
<body>
<?php
$age = array("peter"=> "35", "Ben"=>"35","Jeo"=>"43");
asort($age);

foreach($age as $x => $x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

?>
</body>
</html>