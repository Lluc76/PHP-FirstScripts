<html>
<?php
#Student: Lluc Gracia Roig
#Write a PHP script to sort the following associative array :
#array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
#a) ascending order sort by value
#b) ascending order sort by Key
#c) descending order sorting by Value
#d) descending order sorting by Key

$array = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

#I used asort(sort by value), ksort(sort by key), arsort (sort by descending value) and krsort(to sort descending by key)
#And a foreach for each value inside the array

echo "a) Ascending order sort by value:"."<br>"."<br>";
asort($array);
foreach($array as $a=>$value)
{
echo $a." is : ".$value."years old"."<br>";
}

echo "<br>"."<br>";

echo "b) Ascending order sort by Key:"."<br>"."<br>";
ksort($array);
foreach($array as $a=>$value)
{
echo $a." is : ".$value."years old"."<br>";
}

echo "<br>"."<br>";

echo "c) Descending order sorting by Value:"."<br>"."<br>";
arsort($array);
foreach($array as $a=>$value)
{
echo $a." is : ".$value."years old"."<br>";
}

echo "<br>"."<br>";

echo "d) Descending order sorting by Key:"."<br>"."<br>";
krsort($array);
foreach($array as $a=>$value)
{
echo $a." is : ".$value."years old"."<br>";
}

?>

</html>