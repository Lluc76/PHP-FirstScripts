<html>
<?php
#Student: Lluc Gracia Roig
#Write a PHP function that checks whether a string is all lowercase

$words = "IsThislowercase";

function islower($string){
    #First i count how many char it have
    $length = strlen($string);
    #Then, i go checking if every char is between A-Z in ASCII table (with ord function)
    #If there is, it means that is uppercase, so i return false to exit the function
    for ($x = 0; $x < $length; $x++) {
	if (ord($string[$x]) >= ord('A') && ord($string[$x]) <= ord('Z')) {
        return false;
        }
        }
        return true;
        
}

#Now i check if the boolean is true or false
var_dump(islower($words));

?>

</html>