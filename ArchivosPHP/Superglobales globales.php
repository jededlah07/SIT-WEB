<!DOCTYPE html>
<html>
<body>

<?php  
$x = 75;
  
function myfunction() {
  echo $GLOBALS['x'];
}

myfunction()
?>  

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php  
$x = 75;
  
function myfunction() {
  echo $x;
}

myfunction()
?>  

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php  
$x = 75;
  
function myfunction() {
  global $x;
  echo $x;
}

myfunction()
?>  

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php  
$x = 100;

echo $GLOBALS["x"];
echo $x;
?>  

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php  
function myfunction() {
  $GLOBALS["x"] = 100;
}

myfunction();

echo $GLOBALS["x"];
echo $x;
?>  

</body>
</html>
