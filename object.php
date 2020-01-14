<html>
<body>
<?php
class Car {
    function Car(){
        $this->model = "vw";
    }
}
// creat an abject
$herbie = new Car() ;
// show object properties
echo $herbie->model;
?>
</body>
</html>
