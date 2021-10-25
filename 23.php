<html>
<?php
#Student: Lluc Gracia Roig
#Write a PHP program to check which number nearest to the value 100 among two given
#integers. Return 0 if the two numbers are equal.

$int1 = 101;
$int2 = 102;

#I compare if both numbers are equal, if there are i show 0
if ($int1 == $int2) {
    echo 0;
}

#With abs function i check the absolute difference between 100 and both numbers
$abs1 = abs($int1 - 100);
$abs2 = abs($int2 - 100);

#Now compare which of both have lower difference (is more close to 100), and is done
if ($abs1 < $abs2){
    echo $int1;
} else {
    echo $int2;
}
?>

</html>