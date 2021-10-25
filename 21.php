<html>
<?php
#Student: Lluc Gracia Roig
#Write a PHP program to remove the character in a given position of a given string. The
#given position will be in the range 0..string length -1 inclusive.

#We use the substr_replace to replace the string in $pos position with "nothing"

$text = "Python";
$pos = 1;
$final = substr_replace($text, "", $pos, 1);
echo $final;

?>

</html>