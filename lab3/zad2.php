<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad2</title>
</head>
<body>
    <h1>Kalkulator</h1>
    <h2>Prosty</h2>
    <?php
        function Dodawanie($liczba1, $liczba2){
            return $liczba1+$liczba2;
        }
        function Odejmowanie($liczba1, $liczba2){
            return $liczba1-$liczba2;
        }
        function Mnozenie($liczba1, $liczba2){
            return $liczba1*$liczba2;
        }
        function Dzielenie($liczba1, $liczba2){
            return $liczba1/$liczba2;
        }
        function CheckVar1(){
            return isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['podstawowyKalkulator']);
        }
        function CheckVar2(){
            return isset($_POST['number']) && isset($_POST['zaawansowanyKalkulator']);
        }
        
        $number1 = 0;
        $number2 = 0;
        $number = 0;
        $podstawowyKalkulator = '';
        $zaawansowanyKalkulator = '';
        if(CheckVar1()){
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $podstawowyKalkulator = $_POST['podstawowyKalkulator'];
        }
        if(CheckVar2()){
            $number = $_POST['number'];
            $zaawansowanyKalkulator = $_POST['zaawansowanyKalkulator'];
        }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <table>
        <tr>
            <td>
                <input type="number" name="number1" placeholder="<?php echo $number1?>">
            </td>
            <td>
                <select name="podstawowyKalkulator">
                    <option value="dodawanie">dodawanie</option>
                    <option value="odejmowanie">odejmowanie</option>
                    <option value="mnozenie">mnozenie</option>
                    <option value="dzielenie">dzielenie</option>
                </select>
            </td>
            <td>
                <input type="number" name="number2" placeholder="<?php echo $number2?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Oblicz">
                <input type="reset" value="Reset">
            </td>
        </tr>
    </table>
    </form>
    <?php
        if($podstawowyKalkulator == "dodawanie") echo "Wynik dodawania to: ".Dodawanie($number1,$number2);
        if($podstawowyKalkulator == "odejmowanie") echo "Wynik odejmowania to: ".Odejmowanie($number1,$number2);
        if($podstawowyKalkulator == "mnozenie") echo "Wynik mnozenia to: ".Mnozenie($number1,$number2);
        if($podstawowyKalkulator == "dzielenie") echo "Wynik dzielenia to: ".Dzielenie($number1,$number2);
        echo '<br>';
    ?>
    <h2>Zaawansowany</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <table>
            <tr>
                <td><input type="number" name="number" placeholder="Liczba"></td>
                <td>
                    <select name="zaawansowanyKalkulator">
                        <option value="cos">Cosinus</option>
                        <option value="sin">Sinus</option>
                        <option value="tan">Tangens</option>
                        <option value="BinToDec">Binarne na dziesiętne</option>
                        <option value="DecToBin">Dziesiętne na binarne</option>
                        <option value="DecToHex">Dziesiętne na szesnastkowe</option>
                        <option value="HexToDec">Szesnastkowe na dziesiętne</option>
                        <option value="DegToRad">Stopnie na radiany</option>
                        <option value="RadToDeg">Radiany na stopnie</option>
                    </select>
                </td>
                <tr>
                    <td><input type="submit" value="Oblicz"></td>
                </tr>
            </tr>

        </table>
    </form>
    <?php
    if($zaawansowanyKalkulator == 'cos') echo "Wynik to: ".cos($number);
    if($zaawansowanyKalkulator == 'sin') echo "Wynik to: ".sin($number);
    if($zaawansowanyKalkulator == 'tan') echo "Wynik to: ".tan($number);
    if($zaawansowanyKalkulator == 'BinToDec') echo "Wynik to: ".bindec($number);
    if($zaawansowanyKalkulator == 'DecToBin') echo "Wynik to: ".decbin($number);
    if($zaawansowanyKalkulator == 'DecToHex') echo "Wynik to: ".dechex($number);
    if($zaawansowanyKalkulator == 'HexToDec') echo "Wynik to: ".hexdec($number);
    if($zaawansowanyKalkulator == 'DegToRad') echo "Wynik to: ".deg2rad($number);
    if($zaawansowanyKalkulator == 'RadToDeg') echo "Wynik to: ".rad2deg($number);
    ?>
    
</body>
</html>