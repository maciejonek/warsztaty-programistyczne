<?php
$number = readline("Enter number: ");
$loopCounter = 0;
$isPrime = "YES";
//I wersja

for($i=2; $i<$number;$i++){
    if($number%$i==0){
        $isPrime = "NO";
        break;
    }
    $loopCounter++;
}
echo "Prime? $isPrime\n How many loops? $loopCounter\n";

$loopCounter = 0;
$isPrime = "YES";
//II wersja

if($number%2==0 && $number!=2){
    $isPrime = "NO";
}
else{
    for ($i=3;$i<=sqrt($number);$i++){
        if($number%$i==0){
            $isPrime = "NO";
            break;
        }
        $loopCounter++;
    }
}
echo "Prime? $isPrime\n How many loops? $loopCounter";