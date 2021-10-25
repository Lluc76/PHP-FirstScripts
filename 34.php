<html>
<?php
#Student: Lluc Gracia Roig
#Write a PHP script to extract the user name from the following email ID

#I use strstr to cut from start to @ of string. If 1 is before, 0 is after
$email = "rayy@example.com";
$usr = strstr($email, '@', 1);
echo $usr;

?>

</html>