<!DOCTYPE html>
<html>
<body>
<?php
$jsonobj= '{"Peter":35,"Ben":37,"Joe":43}';
$obj = json_decode($jsonobj, true);

foreach($obj as $key => $value)
{
    echo $key . "=>" . $value . "<br>";
}
?>
</body>
</html>

