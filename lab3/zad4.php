<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad4</title>
</head>
<body>
    <?php
    function Year($peselTab, &$year){
        if($peselTab[2]==0 || $peselTab[2]==1) $year='19'.$peselTab[0].$peselTab[1];
        elseif ($peselTab[2]==2 || $peselTab[2]==3) $year='20'.$peselTab[0].$peselTab[1];
    }
    function Month($peselTab, &$month){

        if(($peselTab[2]*10+$peselTab[3])%20==1) $month = 'styczen';
        elseif(($peselTab[2]*10+$peselTab[3])%20==2) $month = 'luty';
        elseif($peselTab[3]==3) $month = 'marzec';
        elseif($peselTab[3]==4) $month = 'kwiecien';
        elseif($peselTab[3]==5) $month = 'maj';
        elseif($peselTab[3]==6) $month = 'czerwiec';
        elseif($peselTab[3]==7) $month = 'lipiec';
        elseif($peselTab[3]==8) $month = 'sierpien';
        elseif($peselTab[3]==9) $month = 'wrzesien';
        elseif($peselTab[3]==0) $month = 'pazdziernik';
        elseif(($peselTab[2]*10+$peselTab[3])%20==11) $month = 'listopad';
        elseif(($peselTab[2]*10+$peselTab[3])%20==12) $month = 'grudzien';
    }
    function Day($peselTab, &$day){
        $day = $peselTab[4]*10+$peselTab[5];
    }
    function Gender($peselTab, &$gender){
        if($peselTab[9]%2==0) $gender='kobietą';
        else $gender='mężczyzną';
    }
    $pesel = '';
    $peselTab = array();
    $year = '';
    $month = '';
    $day = '';
    $gender = '';
    if(isset($_POST['pesel'])){
        $pesel = $_POST['pesel'];
        $peselTab = array_map('intval', str_split($pesel));
    }
    ?>
    <h1>Podaj pesel</h1>
    <div>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <table>
                <tr>
                    <td>PESEL:</td>
                    <td><input type="number" name="pesel" placeholder="PESEL"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Sprawdź"></td>
                </tr>
            </table>
        </form>
    </div>
    <div>
        <?php
            if(sizeof($peselTab)!=0){
            Year($peselTab,$year);
            Month($peselTab,$month);
            Day($peselTab,$day);
            Gender($peselTab,$gender);
            if($gender=='kobietą')
                echo '<h3>'.'Urodziłaś się '.$day.' '.$month.' '.$year.'<br>Jesteś '.$gender.'</h3>';
            else
                echo '<h3>'.'Urodziłeś się '.$day.' '.$month.' '.$year.'<br>Jesteś '.$gender.'</h3>';
            }
        ?>
    </div>
    
</body>
</html>
