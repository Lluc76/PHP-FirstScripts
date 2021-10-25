<html>
<?php
#Student: Lluc Gracia Roig
#Write a PHP function to set union of two arrays

$array1 = array(12, 13, 14, 15);
$array2 = array(10, 11, 12, 13, 15, 16, 17 );

#I used the function array_intersect to get the same values from array1 and array2.
#And then array_diff to get the differences from array1 and array2.
#With array_merge to unificate both arrays
function array_fusion($a, $b)
   { 
      $fusion = 
            array_merge(
            array_intersect($a, $b), array_diff($a, $b), array_diff($b, $a)      
        );
      return $fusion;
   }

print_r(array_fusion($array1, $array2));

?>

</html>