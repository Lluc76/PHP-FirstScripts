<html>
<?php
#Student: Lluc Gracia Roig
#Write a PHP script to :
#a) transform a string all uppercase letters.
#b) transform a string all lowercase letters.
#c) make a string's first character uppercase.
#d) make a string's first character of all the words uppercase

$string = "BuEnOsDiAs";

#I divided the exercice in divided functions
#It converts all the characters to uppercase
function a($s){
    
    $aresult = strtoupper($s);
    echo $aresult."<br>";
}

a($string);

#It converts all the characters to lowercase
function b($s){
    
    $bresult = strtolower($s);
    echo $bresult."<br>";
}

b($string);

#It converts the first character to uppercase

function c($s){
    
    $cresult = ucfirst($s);
    echo $cresult."<br>";
}

c($string);

#It converts the first character of all words to uppercase
function d($s){
    
    $dresult = ucwords($s);
    echo $dresult."<br>";
}

d($string);

?>

</html>