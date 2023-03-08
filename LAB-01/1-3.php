<?php
$cenzura = array("KURDE","KURCZE", "PIERNIKI");
$zdanie = "";
Fscanf(STDIN,"%[^\n]",$zdanie);
foreach ($cenzura as $slowo){
    $zdanie = str_ireplace("$slowo","*****","$zdanie");
}
echo "$zdanie";