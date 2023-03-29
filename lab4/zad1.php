<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad 1</title>
</head>
<body>
<?php
    function NextBirthday(){
        $days = (round(abs(strtotime($_GET['date'])-time()) / 86400))%365;
        if(strtotime($_GET['date'])-time()>time()-strtotime($_GET['date']))
            return $days+1;
        else return 365-$days;
    }
    $timestampUser = '';
    $years = '';
    $weekDay = '';
    $nextBirthday = '';

    if(isset($_GET['date'])){
        $timestampUser = strtotime($_GET['date']);
        $weekDay = date('l',$timestampUser);
        $years = abs(floor((time()-$timestampUser)/60/60/24/365));
        $nextBirthday = NextBirthday();
    }
?>
    <h1>PODAJ DATE URODZENIA</h1>
    <div>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
                <p><input type="date" name="date"></p>
                <p><input type="submit" value="  "></p>
        </form>
    </div>
<?php
echo "Dzień tygodnia: ".$weekDay.'<br>';
echo "Ile lat ".$years.'<br>';
echo "Za ile nastepne urodziny: ".$nextBirthday;
?>
</body>
</html>