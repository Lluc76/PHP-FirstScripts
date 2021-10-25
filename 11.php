<html>
<?php
#Student: Lluc Gracia Roig
#Write a program to calculate and print the factorial of a number using a for loop. The
#factorial of a number is the product of all integers up to and including that number, so the
#factorial of 4 is 4*3*2*1= 24

#Will be adding to the array all the numbers to compose the factorial
$fact = 4;
$mult = [];
for ($i = $fact;$i > 0;$i--){
    
    array_push($mult,$i);

}
#And then we multiplicate eachother
echo array_product($mult);
?>
</html>