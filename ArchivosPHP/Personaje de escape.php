<!DOCTYPE html>
<html>
<body>

<?php
//PHP will raise an error when executing this statement:

$x = "We are the so-called "Vikings" from the north.";
echo $x;
?> 

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php
$x = "We are the so-called \"Vikings\" from the north.";
echo $x;
?> 

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php
$x = 'We are the so-called \'Vikings\' from the north.';
echo $x;
?> 

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php
$x = "We are the so-called \"Vikings\" from the north.";
echo $x;
?> 

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php
$x = "Escape php variable name \$myvar";
echo $x;
?> 

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<pre>
<?php
$x = "Hello\nWorld";
echo $x;
?> 
</pre>

<p>To preserve any whitespace or line breaks, we have wrapped the result in a PRE element</p>

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<pre>
<?php
$x = "Hello\rWorld";
echo $x;
?> 
</pre>

<p>To preserve any whitespace or line breaks, we have wrapped the result in a PRE element</p>

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<pre>
<?php
$x = "Hello\tWorld";
echo $x;
?> 
</pre>

<p>To preserve any whitespace or line breaks, we have wrapped the result in a PRE element</p>

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<p>A backslash followed by three integers will result in a octal value:</p>

<?php
$x = "\110\145\154\154\157";
echo $x;
?> 

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<p>A backslash followed by an 'x' and a hex number represents a hex value:</p>

<?php
$x = "\x48\x65\x6c\x6c\x6f";
echo $x;
?> 

</body>
</html>
