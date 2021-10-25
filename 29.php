<html>
<?php
#Student: Lluc Gracia Roig
#Write a PHP script to calculate and display average temperature, five lowest and highest
#temperatures.

$temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62,
73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

#Calculating the average
$average = array_sum($temp) / count($temp);
echo $average."<br>";

#We sort alphabetically
sort($temp);

#And with a for we print 5 first array values
echo "List of five lowest temperatures :";
for ($c=0; $c < 5; $c++)
{ 
echo $temp[$c].", ";
}

echo "<br>";

#We sort reverse alphabetically
rsort($temp);

#And with a for we print 5 first array values
echo "List of five lowest temperatures :";
for ($c=0; $c < 5; $c++)
{ 
echo $temp[$c].", ";
}
?>

</html>