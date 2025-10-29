<!DOCTYPE html>
<html>
<body>

<?php  
$cars = array("Volvo", "BMW", "Toyota");
echo $cars[2];
?>  

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php  
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["year"];
?>  

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php  
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
echo $cars["model"];
echo "<br>";
echo $cars['model'];
?>  

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php  
function myFunction() {
  echo "I come from a function!";
}

$myArr = array("Volvo", 15, myFunction);

$myArr[2]();
?>  

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php  
function myFunction() {
  echo "I come from a function!";
}

$myArr = array("car" => "Volvo", "age" => 15, "message" => myFunction);

$myArr["message"]();
?>  

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

foreach ($car as $x => $y) {
  echo "$x: $y <br>";
}
?>

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php
$cars = array("Volvo", "BMW", "Toyota"); 

foreach ($cars as $x) {
  echo "$x <br>";
}
?>

</body>
</html>
