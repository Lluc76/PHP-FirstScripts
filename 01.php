<?php
#Student: Lluc Gracia Roig
#Write a PHP program to swap two variables


$var1 = 54;
$var2 = 23;

echo "$var1 $var2 <br>";

#We use a 3rd variable to interchange the value of both
$varaux = $var1;

#Now we do the change
$var1 = $var2;
$var2 = $varaux;

echo "$var1 $var2 <br>"

?>