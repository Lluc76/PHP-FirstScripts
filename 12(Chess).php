<html>

<table width="270px" border="1px" cellspacing="0px" cellpadding="0px" style="border-style: solid;">
    
<?php
#Student: Lluc Gracia Roig
# Write a PHP script using nested for loop that creates a chess board as shown below.
#Use table width="270px" and take 30px as cell height and width. 8x8 cells


#We will use a nested loop for build the columns and the rows
#The first for will be making the rows
for ($row = 1;$row <= 8;$row++){
    echo "<tr>";
    #And the 2nd one to build the columns
    for ($column = 0; $column < 8; $column++){
        #Here we will sum all the rows and columns and see if they are odd or not
        $total = $row + $column;
        if ($total % 2 == 0){
        #The pairs will be white square
        echo "<td height=30px width=30px bgcolor=white></td>";    
        } else{
        #And add the odds black color
        echo "<td height=30px width=30px bgcolor=black></td>";
        }
        }
    echo "</tr>";
    
}

?>
</table>

</html>