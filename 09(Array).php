<html>
<?php
#Student: Lluc Gracia Roig
#This exercise is the same as the 9th, but using an array
#Create a script using a for loop to add all the integers between 0 and 30 and display the total.
#We create an array
$suma = [];

#We add every number inside the array
for ( $i=0; $i <= 30;$i++){
    
    array_push($suma,$i);
    
}       
#And then we sum all together
echo array_sum($suma);

?>
</html>