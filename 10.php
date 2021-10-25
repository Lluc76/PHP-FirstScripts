<html>
<?php
#Student: Lluc Gracia Roig
# Create a script to construct the following pattern, using nested for loop

#We use the first for to build the rows
for ($i = 1;$i <= 4;$i++){
    if ($i > 1){echo "<br>";}
    #And the 2nd one to build the columns. $i of the previous loop needed
    for ($a = 0;$a < $i;$a++){
        echo "*";
    }
}

?>
</html>