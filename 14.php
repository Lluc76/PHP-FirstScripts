<html>
<?php
#Student: Lluc Gracia Roig
#Write a function to calculate the factorial of a number (a non-negative integer). The
#function accepts the number as an argument.

#I just putted this from the previous exercise into a function
function factorial($num){
$fact = ($num);
$mult = [];
for ($i = $fact;$i > 0;$i--){
    
    array_push($mult,$i);

}
echo array_product($mult);
}

#And we call the function
factorial(2);

?>
</html>