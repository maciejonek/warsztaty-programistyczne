<?php
$nationalities = array("POLAND"=>"Pole", "BELGIUM"=>"Belgian", "EGYPT"=>"Egyptian");
$country = readline("Enter your country: ");
$country =  strtoupper($country);
foreach ($nationalities as $nation=>$nationality){
    if($country == $nation) echo "Your nationality: $nationality";
}