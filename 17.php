<html>
<?php
#Student: Lluc Gracia Roig
#Write a function to reverse a string

#First i use a strlen to count how many characters it have
#Then i give to x the value of length -1 (cause is an array, and the first char at array is 0)
#And we're printing from the last char to the first

$text = "I Understand this Exercise Perfectly";  

function myreverse($i){
    

$length = strlen($i);  
for ($x=($length-1) ; $x >= 0 ; $x--)   
{  
  echo $i[$x];  
}  
}

myreverse($text);

?>

</html>