<!DOCTYPE html>
<html>
<body>

<?php
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); 
?>

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);
?>

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<?php
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str);
?>

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: i</h1>

<p>How many occurences of the letter s is in the text "W3Schools":</p>

<?php
$txt = "W3Schools";
$pattern = "/s/i";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>




<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: i</h1>

<p>How many occurences of the letter s is in the text "W3Schools":</p>

<?php
$txt = "W3Schools";
$pattern = "/s/i";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: m</h1>

<p>How many times does the phrase "you" occur at the beginning of a line in the text:</p>

<pre>you are better than
you think</pre>

<?php
$txt = "you are better than\nyou think";
$pattern = "/^you/m";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<pre>
<?php
echo preg_replace($pattern, "#", $txt);
?>  
</pre>

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: [co]</h1>

<p>How many occurences of the letters "c" or "o" are in the text "W3Schools.com":</p>

<?php
$txt = "W3Schools.com";
$pattern = "/[co]/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: [^eo]</h1>

<p>How many letters in the text "Welcome" are not "e" or "o":</p>

<?php
$txt = "Welcome";
$pattern = "/[^eo]/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: [e-o]</h1>

<p>How many letters in the text "Welcome" are alphabetically between "e" and "o":</p>

<?php
$txt = "Welcome";
$pattern = "/[e-o]/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: [T-e]</h1>

<p>How many letters in the text "Welcome to W3Schools" are alphabetically between uppercase "T" and lowercase "e":</p>

<?php
$txt = "Welcome to W3Schools";
$pattern = "/[T-e]/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: [A-Z]</h1>

<p>How many letters in the text "Welcome to W3Schools" are alphabetically between uppercase "A" and uppercase "Z":</p>

<?php
$txt = "Welcome to W3Schools";
$pattern = "/[A-Z]/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: [123]</h1>

<p>How many characters in the text "W3Schools has been live since 1999" is either the number "1", "2", or "3":</p>

<?php
$txt = "W3Schools has been live since 1999";
$pattern = "/[123]/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: [0-5]</h1>

<p>How many characters in the text "Call 555-2368" is a digit between "0" and "5":</p>

<?php
$txt = "Call 555-2368";
$pattern = "/[0-5]/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: [0-9]</h1>

<p>How many digits are in the text "W3Schools has been live since 1999"?:</p>

<?php
$txt = "W3Schools has been live since 1999";
$pattern = "/[0-9]/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: cat|dog|fish</h1>

<p>How many occurrences of either "cat", "dog", or "fish" are in the text "We have three dogs, one fish, but no cats":</p>

<?php
$txt = "We have three dogs, one fish, but no cats";
$pattern = "/cat|dog|fish/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: .</h1>

<p>How many occurrences of ANY character or digit are in the text "W3Schools has been live since 1999.":</p>

<?php
$txt = "W3Schools has been live since 1999.";
$pattern = "/./";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: ^W3</h1>

<p>Does the text "W3Schools", start with "W3"?:</p>

<?php
$txt = "W3Schools";
$pattern = "/^W3/";
echo preg_match_all($pattern, $txt);
?>  

<p>This method returns 1 if there is a match, otherwise 0.</p>

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(The match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: World$</h1>

<p>Does the text "Hello World", end with "World"?:</p>

<?php
$txt = "Hello World";
$pattern = "/World$/";
echo preg_match_all($pattern, $txt);
?>  

<p>This method returns 1 if there is a match, otherwise 0.</p>

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(The match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: \d</h1>

<p>How many digits are in the text "W3Schools has been live since 1999"?:</p>

<?php
$txt = "W3Schools has been live since 1999";
$pattern = "/\d/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: \D</h1>

<p>How many non-digit characters are in the text "W3Schools has been live since 1999"?:</p>

<?php
$txt = "W3Schools has been live since 1999";
$pattern = "/\D/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: \s</h1>

<p>How many white spaces are in the text "W3Schools has been live since 1999"?:</p>

<?php
$txt = "W3Schools has been live since 1999";
$pattern = "/\s/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: \S</h1>

<p>How many non-whitespace characters are in the text "W3Schools has been live since 1999"?:</p>

<?php
$txt = "W3Schools has been live since 1999";
$pattern = "/\S/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: \w</h1>

<p>How many alphatbetical or digit characters are in the text "W3Schools.com"?:</p>
<?php
$txt = "W3Schools.com";
$pattern = "/\w/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: \W</h1>

<p>How many non-alphatbetical and non-digit characters are in the text "W3Schools.com"?:</p>
<?php
$txt = "W3Schools.com";
$pattern = "/\W/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: \b</h1>

<p>Does the text "Hello World" start with "Hel"?:</p>

<?php
$txt = "Hello World";
$pattern = "/\bHel/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: \u</h1>

<p>How many occurences of the digit "9" are in the text "W3Schools has been live since 1999"?:</p>

<p>Use the hexadecimal equivalence of 9 which is 0039.</p>

<?php
$txt = "W3Schools has been live since 1999";
$pattern = "/\u{0039}/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: +</h1>

<p>How many occurences of the character "n" are in the text "W3Schools has been live since 1999"?:</p>

<?php
$txt = "W3Schools has been live since 1999";
$pattern = "/n+/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: o{3}</h1>

<p>How many occurences of 3 preceeding o's (ooo) are in the text "W3Schools is goood"?:</p>

<?php
$txt = "W3Schools is goood";
$pattern = "/o{3}/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: o{2,5}</h1>

<p>How many occurences of at least 2 preceeding o's (oo), but not more than 5 preceeding o's (ooooo) are in the text "W3Schools is goood"?:</p>

<?php
$txt = "W3Schools is gooood";
$pattern = "/o{2,5}/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<h1>Regex Modifier: o{3,}</h1>

<p>How many occurences of at least 3 preceeding o's (ooo) are in the text "W3Schools is goooooood"?:</p>

<?php
$txt = "W3Schools is goooooood";
$pattern = "/o{3,}/";
echo preg_match_all($pattern, $txt);
?>  

<p>The matches were found here:</p>

<?php
echo preg_replace($pattern, "#", $txt);
?>  

<p>(Each match was replaced by a # character)</p>

</body>
</html>





<!DOCTYPE html>
<html>
<body>

<?php
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str);
?>

</body>
</html>
