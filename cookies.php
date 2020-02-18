<!DOCTYPE html>
<?php
$cookie_name ="user";
$cookie_vlaue = "John Deo";
setcookie($cookie_name, $cookie_vlaue, time() + (86400 * 30), "/");
// 86400 = 1 day
?>
<html>
<body>
<?php
if (!isset($_COOKIE[$cookie_name]))
{
    echo "Cookie named '" . $cookie_name . "' is not set !";
}
else 
{
    echo "Cookie '". $cookie_name . "'is set! <br>";
    echo "Value is : " . $_COOKIE[$cookie_name];
}
?>
<P><strong>Note:</string> You might have to reload the page to see the value of the cookies.</p>
</body>
</html>