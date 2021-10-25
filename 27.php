<html>
<?php
#Student: Lluc Gracia Roig
#Create a PHP script which displays the capital and country name from the above array $ceu.
#Sort the list by the capital of the country

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" =>
"Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon",
"Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London",
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague",
"Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria"
=> "Vienna", "Poland"=>"Warsaw") ;

#I user asort to order by value
asort($ceu);

#Then for each value in array i echo the name of the country and the capital
foreach ($ceu as $country=>$capital){
    echo "The capital of ".$country." is ".$capital."<br>";
}

?>

</html>