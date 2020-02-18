<!DOCTYPE html>
<html>
<body>
<?php
// variable to check

$int = 122;

// min value
$min = 1;

// max value 
$max = 200;

if (filter_var($int, FILTER_VALIDATE_INT, array ("option"=>array ("min_rang" => $min,  "max_rang" =>$max)))=== false)
{
    echo ("Variable value is not within the legal range");
}
else
{
    echo ("Variable value is within the legal range");
}
?>
</body>
</html>