<?php
$figura = "";
echo "Podaj figure: ";
Fscanf(STDIN,"%s",$figura);
switch ($figura){
    case "trojkat":
        $podstawa = 0;
        $wysokosc = 0;
        echo "podaj podstawe oraz wysokosc\n";
        Fscanf(STDIN,"%d %d", $podstawa, $wysokosc);
        echo $podstawa*$wysokosc/2;
        break;
    case 'p':
        $bokA = 0;
        $bokB = 0;
        echo "podaj bok A oraz bok B\n";
        Fscanf(STDIN,"%d %d", $bokA, $bokB);
        echo $bokA*$bokB;
        break;
    case 'trapez':
        $podstawa1 = 0;
        $podstawa2 = 0;
        $wysokosc = 0;
        echo "podaj podstawe 1, podstaw 2 oraz wysokosc\n";
        Fscanf(STDIN,"%d %d %d", $podstawa1,$podstawa2,$wysokosc);
        echo ($podstawa1+$podstawa2)*$wysokosc/2;
        break;
    default:
        echo "bledna figura!";
        break;

};