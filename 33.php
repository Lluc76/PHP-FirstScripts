<html>
<?php
#Student: Lluc Gracia Roig
#Write a PHP script to extract the file name from the following string

#First i cut from last "/" to end of the string, and the i remove the first char "/"
$url = "www.example.com/public_html/index.php";
$file = substr(strrchr($url, "/"), 1);

echo $file;

?>

</html>