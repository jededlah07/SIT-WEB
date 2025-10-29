<!DOCTYPE html>
<html>
<body>
<pre>

<?php  
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
var_dump($cars);
?>  

</pre>
</body>
</html>




<!DOCTYPE html>
<html>
<body>
<pre>

<?php  
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$cars["year"] = 2024;
var_dump($cars);
?>  

</pre>
</body>
</html>




<!DOCTYPE html>
<html>
<body>
<pre>

<?php  
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}
unset($x);
var_dump($cars);
?>  

</pre>
</body>
</html>




<!DOCTYPE html>
<html>
<body>
<pre>

<?php  
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}

$x = "ice cream";

var_dump($cars);
?>  

</pre>
</body>
</html>
