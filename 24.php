<html>
<?php
#Student: Lluc Gracia Roig

#Write a PHP program that accept two integers and return true if either one is 5 or their
#sum or difference is 5

$num1 = 10;
$num2 = 4;

#I compare if either one is 5 or their sum or difference is 5, in this case the output will be true
if (($num1 == 5) || ($num2 == 5) || ($num1 + $num2 == 5) || (abs($num1 - $num2) == 5)){
    echo "bool(true)";
} else {
    #Otherwise will be false
    echo "bool(false)";
}

?>

</html>