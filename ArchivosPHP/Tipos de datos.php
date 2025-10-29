<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
var_dump($x);
?>

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php 
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>"; 
var_dump($y);
?>

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php  
$x = 5985;
var_dump($x);
?>  

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php  
$x = 10.365;
var_dump($x);
?>  

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php 
$x = true;
var_dump($x);
?>

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php  
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>  

</body>
</html>
<!DOCTYPE html>
<html>
<body>

<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
?>

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
var_dump($x);

echo "<br>";

$x = "Hello";
var_dump($x);
?> 

<p>Line breaks were added for better readability.</p>

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$x = (string) $x;
var_dump($x);
?> 

</body>
</html>




