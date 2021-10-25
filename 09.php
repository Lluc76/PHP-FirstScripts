<html>
<?php
#Student: Lluc Gracia Roig
#Create a script using a for loop to add all the integers between 0 and 30 and display the total.

#With a for we're adding every number inside the prevoius one unitl arrive to 30
$suma = 0;
for ( $i=0; $i <= 30;$i++){
    $suma += $i;
}       
echo $suma;

?>
</html>