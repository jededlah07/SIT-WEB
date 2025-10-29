<!DOCTYPE html>
<html>
<body>

<?php  
$i = 1;

while ($i < 6) {
  echo $i;
  $i++;
} 
?>  

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php  
$i = 1;

while ($i < 6) {
  if ($i == 3) break;  
  echo $i;
  $i++;
} 
?>  

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php  
$i = 0;

while ($i < 6) {
  $i++;
  if ($i == 3) continue;  
  echo $i;
} 
?>  

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php  
$i = 1;

while ($i < 6):
  echo $i;
  $i++;
endwhile;
?>  

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php  
$i = 0;

while ($i < 100) {
  $i+=10;
  echo "$i<br>";
}
?>  

</body>
</html>
