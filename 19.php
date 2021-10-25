<html>
<?php
#Student: Lluc Gracia Roig

#Write a PHP program to get the absolute difference between n and 51. If n is greater
#than 51 return triple the absolute difference

$n = 52;
if ($n <= 51){
    $rest = 51 - $n;
    echo $rest;
} else {
    $rest = $n - 51;
    $rest *= 3;
    echo "$rest";
}

?>

</html>