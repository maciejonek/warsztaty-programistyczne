<?php
$arraySize = readline("How many throws? ");
$randomArray = array_fill(0,$arraySize,1);

for($i = 0; $i < $arraySize ; $i++){
    $randomArray[$i]*=rand(1,6);
}
print_r($randomArray);