<html>
<?php
#Student: Lluc Gracia Roig

#Write a PHP program to create a new string where 'if' is added to the front of a given
#string. If the string already begins with 'if', return the string unchanged.

#With substr function we substract from the string the first 2 character
#And i check if are "if" o not
$input = 'else';
$cutted = substr($input, 0, 2);
if ($cutted == "if"){
    echo $input;
    
} else {
    echo "if ".$input;
    
}
?>

</html>