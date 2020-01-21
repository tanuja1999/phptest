<html>
<body>
<?php
$t = date("H");
if ($t < "10")
{
    echo "Have a good morning !";
}
elseif($t < "20")
{
    echo "Have a good day !";
}
else  
{
 "Have a good night !";
}
?>
</body>
</html>