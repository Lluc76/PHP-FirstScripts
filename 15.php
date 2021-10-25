<html>
<?php
#Student: Lluc Gracia Roig
#Write a function to check if a number is prime or not

$num = 45;

function primeornot($num)
{
   #Cause 1 is no a prime number we discard from this ecuation with a comparison
   if ($num == 1)
   return 0;
   #So we start from number 2, and will continue until arrive to the $num divided by 2
      for ($i = 2; $i <= $num/2; $i++)
   {
    #Now will check every division, and if any division get the module = 0, that means that than number is not prime, returning with a 0 code
      if ($num % $i == 0)
      return 0;
   }
   #If any division gets 0 as a module that means that the $num is prime, and will retunr with a 1 code
   return 1;
}

$boolean = primeornot($num);
if ($boolean == 1)
   echo $num." is a prime number";
else
   echo $num." it's not a prime number";
?>

</html>