<?php
$pesel = 0;
Fscanf(STDIN,"%d",$pesel);
$peselTab = array_map('intval', str_split($pesel));
if($peselTab[2]>=2) echo "$peselTab[4]$peselTab[5]-$peselTab[2]$peselTab[3]-20$peselTab[0]$peselTab[1]";
else echo "$peselTab[4]$peselTab[5]-$peselTab[2]$peselTab[3]-19$peselTab[0]$peselTab[1]";