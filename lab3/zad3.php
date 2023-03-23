<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad3</title>
</head>
<body>
<?php
    function fromTo($year,&$x,&$y){
        if($year>=1 && $year<=1582){
            $x=15;
            $y=6;
            return 1;
        }
        elseif($year>=1582 && $year<=1699){
            $x=22;
            $y=2;
            return 1;
        }
        elseif($year>=1700 && $year<=1799){
            $x=23;
            $y=3;
            return 1;
        }
        elseif($year>=1800 && $year<=1899){
            $x=23;
            $y=4;
            return 1;
        }
        elseif($year>=1900 && $year<=2099){
            $x=24;
            $y=5;
            return 1;
        }
        elseif($year>=2100 && $year<=2199){
            $x=24;
            $y=6;
            return 1;
        }
        elseif ($year == ''){
            return 0;
        }
        else{
            echo "nieprawidlowy rok";
            return 0;
        }

    }
    function calc($year,&$d, &$f, $x, $y){
        $a=$year%19;
        $b=$year%4;
        $c=$year%7;
        $d=(19*$a+$x)%30;
        $f=(2*$b+4*$c+6*$d+$y)%7;
    }
    function data($year,$d,$f,$x,$y){
        calc($year,$d,$f,$x,$y);
        if($f==6 && $d == 29) echo '<h2>'."Wielkanoc jest 26 kwietnia.".'</h2>';
        elseif($f==6 && $d == 28 && ((11*$x+11)%30)<19) echo '<h2>'."Wielkanoc jest 18 kwietnia.".'</h2>';
        elseif($d+$f<10) echo '<h2>'."Wielkanoc jest ".(22+$d+$f)." marca.".'</h2>';
        elseif($d+$f>9) echo '<h2>'."Wielkanoc jest ".($d+$f-9)." kwietnia.".'</h2>';
    }
    $year = '';
    $x = 0;
    $y = 0;
    $d = 0;
    $f = 0;
    if(isset($_POST['year'])){
        $year=$_POST['year'];
    }
?>
    <div>
        <h1>OBLICZANIE DATY WIELKANOCY</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <table>
                <tr>
                    <td>PODAJ ROK</td>
                    <td><input type="number" name="year" placeholder="rok"></td>
                    <td><input type="submit" value="Oblicz"></td>
                </tr>
            </table>
        </form>
        <?php
            if(fromTo($year,$x,$y)) {
                data($year,$d,$f,$x,$y);
            }
        ?>
    </div>
</body>
</html>
