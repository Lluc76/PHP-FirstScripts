<html>
<?php
#Student: Lluc Gracia Roig
#Write a PHP script to format values in currency style.

$value1 = 65.45;
$value2 = 104.35;

#I used sprintf to show the values of the variable with another format
$sum = $value1 + $value2;
echo sprintf("%1.2f", $sum);

?>

</html>