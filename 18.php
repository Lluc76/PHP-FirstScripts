<html>
<?php
#Student: Lluc Gracia Roig
#Write a PHP program to compute the sum of the two given integer values. If the two
#values are the same, then returns triple their sum.

$num1 = 2;
$num2 = 1;
$sum = 0;
$operator = 0;

if ($num1 == $num2) {
    $sum = $num1 + $num2;
    $operator = $sum * 3;
    echo "$operator";
} else {
    $sum = $num1 + $num2;
    echo "$sum";
}

?>

</html>