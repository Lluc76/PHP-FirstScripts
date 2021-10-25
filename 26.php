<html>
<?php
#Student: Lluc Gracia Roig

#$color = array('white', 'green', 'red')
#Write a PHP script which will display the colors in the following way :
#white, green, red,
#● green
#● red
#● white

$color = array('white', 'green', 'red');

#For each element of the array it showss
foreach ($color as $i){
    echo "$i, ";
}
echo "<br>";

#With sort function we can sort the array
sort($color);

#We need to create a unordenated list
echo "<ul>";

#With a for we display all the elements sorted
$list = count($color);
for($x = 0; $x < $list; $x++) {
  echo "<li>".$color[$x]."</li>";
  
}
echo "</ul>";
?>

</html>