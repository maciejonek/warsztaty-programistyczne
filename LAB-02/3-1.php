<?php
$randomArray = array_fill(0,50,1);
for($i = 0; $i < 50 ; $i++){
    $randomArray[$i]*=rand(1,43);
}
print_r($randomArray);
$max = 0;
for($i = 0; $i < 50; $i++){
    if($randomArray[$i]>$max) $max = $randomArray[$i];
}
echo "$max\n";

$max = 0;
$i = 0;
while ($i<50){
    if($randomArray[$i]>$max) $max = $randomArray[$i];
    $i++;
}
echo "$max\n";

$max = 0;
$i = 0;
do{
    if($randomArray[$i]>$max) $max = $randomArray[$i];
    $i++;
}while($i<50);
echo "$max\n";

$max = 0;
foreach ($randomArray as $number){
    if($number>$max) $max = $number;
}
echo "$max\n";

