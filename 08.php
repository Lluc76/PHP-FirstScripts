<html>
<?php
#Student: Lluc Gracia Roig
#Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position.

$a = 1;
while ($a <= 10) {
    
    echo "$a";
    if ($a < 10) {
    
    echo "-";
    }
    $a++;
    

}
?>
</html>