<?php
$randomArray = array_fill(0,50,1);
for($i = 0; $i < 50 ; $i++){
    $randomArray[$i]*=rand(1,50);
}
$index = 0;
print_r($randomArray);
$index = readline("Podaj index: ");
print ($randomArray[$index]);
