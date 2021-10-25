<html>
<?php
#Student: Lluc Gracia Roig
#Write a PHP script to get the first word of a sentence

#I used the strstr to get the characters before(1 in function) the " "(space)
$sentence = "The quick brown fox";
$word = strstr($sentence, ' ', 1);
echo $word;

?>

</html>