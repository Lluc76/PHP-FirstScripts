<html>
<?php
#Student: Lluc Gracia Roig
#Write a PHP script to check whether a string contains a specific string?

$string = "The quick brown fox jumps over the lazy dog";

$seek = "jump";

#I use strpos to found inside $string the $seek string

if (strpos($string, $seek) == true){
    echo $seek." found inside the string";
} else {
    echo $seek." not found inside the string";
}

?>

</html>