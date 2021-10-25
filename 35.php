<html>
<?php
#Student: Lluc Gracia Roig
#Write a PHP script to get the last three characters of a string

#I used substr to substract from $email the last 3 chracters
$email = "rayy@example.com";
$last3 = substr($email, -3);
echo $last3;

?>

</html>