<html>
<?php
#Student: Lluc Gracia Roig
#Write a PHP script to remove all leading zeroes from a string.

#I use ltrim to remove from $number, all the firsts 0
$number = "000547023.24";
$noinitzeroes = ltrim($number, 0);
echo $noinitzeroes;

?>

</html>