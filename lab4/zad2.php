<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad 2</title>
</head>
<body>
<?php
function FactorialRecursive($number){
    if($number>1)
        return $number*FactorialRecursive($number-1);
    else
        return 1;
}
function Factorial($number){
    $result = 1;
    for($i=1;$i<=$number;$i++){
        $result*=$i;
    }
    return $result;
}
function TimeCheck($time1,$time2){
    if($time1<=$time2) return "Funkcja 1";
    else return "Funkcja 2";
}
$number = 0;
if(isset($_GET['number']))
    $number = $_GET['number'];
?>
    <div>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <p><input type="number" name="number" placeholder="[Liczba]!"></p>
            <p><input type="submit" value="Oblicz"></p>
        </form>
    </div>
<?php
    if(isset($_GET['number'])){
        $timeStart1 = microtime(true);
        $result1 = FactorialRecursive($number);
        $timeEnd1 = microtime(true);
        $time1 = $timeEnd1-$timeStart1;

        $timeStart2 = microtime(true);
        $result2 = Factorial($number);
        $timeEnd2 =  microtime(true);
        $time2 = $timeEnd2 - $timeStart2;
        echo $time1.' '.$time2.'<br>';
        echo "Szybciej dziala ".TimeCheck($time1,$time2);
    }
?>
</body>
</html>


