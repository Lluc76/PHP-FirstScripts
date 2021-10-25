<html>
<?php
#Student: Lluc Gracia Roig

#Write a PHP program to check if the value of each element is equal or greater than the
#value of previous element of a given array of integers.

$array1 = array(5, 5, 1, 5, 5);
$array2 = array(1, 2, 3, 4);
$array3 = array(3, 3, 5, 5, 5, 5);
$array4 = array(1, 5, 5, 7, 8, 10);

#Inside the for we count the values and we substract 1 (cause is an array, and the first value start at 0 position)
function check($numbers)
    { 
       for ($i = 0; $i < count($numbers) - 1; $i++)
          {
             #If The actual value is bigger than the next value it returns false
             if ($numbers[$i] > $numbers[$i+1]) 
             return false;
          }
         #If the function arrives here thats means that the array is sorted correctly
        return true;
    }

#We use var_dump to see if the function return value is true or false    
echo "1st array: ";
var_dump(check($array1));
echo "<br>";

echo "2nd array: ";
var_dump(check($array2));
echo "<br>";

echo "3rd array: ";
var_dump(check($array3));
echo "<br>";

echo "4th array: ";
var_dump(check($array4));
echo "<br>";
    
?>

</html>