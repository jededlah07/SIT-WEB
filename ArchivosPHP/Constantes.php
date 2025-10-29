<!DOCTYPE html>
<html>
<body>

<?php
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?> 

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php
const MYCAR = "Volvo";

echo MYCAR;
?> 

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?> 

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}
 
myTest();
?> 

</body>
</html>
