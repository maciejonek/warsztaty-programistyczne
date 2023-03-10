<?php
$size = readline("Size: ");
for($i = 1; $i <= $size; $i++){
    for ($j = 1; $j <= $size; $j++) echo ($i*$j . " ");
    echo "\n";
}