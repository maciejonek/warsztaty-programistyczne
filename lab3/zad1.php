<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1</title>
</head>
<body>
    <?php
    function checkVar()
    {
        return isset($_POST['NameAndSurname'])
            && isset($_POST['email'])
            && isset($_POST['number'])
            && isset($_POST['lista-rozwijana'])
            && isset($_POST['textarea'])
            && isset($_POST['radio1'])
            && isset($_POST['file']);
    }
    function checkBox(){
        return ;
    }
    $NameAndSurname = '';
    $email = '';
    $number = '';
    $listaRozwijana = '';
    $textArea = '';
    $checkBox1 = '';
    $checkBox2 = '';
    $radio1 = '';
    $file = '';
    if(checkVar()) {
        $NameAndSurname = $_POST['NameAndSurname'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $listaRozwijana = $_POST['lista-rozwijana'];
        $textArea = $_POST['textarea'];
        $radio1 = $_POST['radio1'];
        $file = $_POST['file'];
    }
    if(isset($_POST['checkBox1'])) $checkBox1 = $_POST['checkBox1'];
    if(isset($_POST['checkBox2'])) $checkBox2 = $_POST['checkBox2'];
    ?>
    <form name="zadanie1" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <table>
                <tr>
                    <td>Imię i nazwisko *</td>
                    <td><input type="text" name="NameAndSurname" value='<?php echo $NameAndSurname?>'></td>
                </tr>
                <tr>
                    <td>Adres e-mail *</td>
                    <td><input type="email" name="email" value='<?php echo $email?>'></td>
                </tr>
                <tr>
                    <td>Numer telefonu *</td>
                    <td><input type="number" name="number" value='<?php echo $number?>'></td>
                </tr>
                <tr>
                    <td>Wybierz temat</td>
                    <td><select name="lista-rozwijana">
                        <option value="opcja1">opcja 1</option>
                        <option value="opcja2">opcja 2</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Wiadomosc</td>
                    <td><textarea name="textarea" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td>Preferowana forma kontaktu</td>
                    <td>
                        <ul>
                            <li><input type="checkbox" name="checkBox1" value="email">Email</li>
                            <li><input type="checkbox" name="checkBox2" value="telefon">Telefon</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Posiadasz juz strone www?</td>
                    <td>
                            <input type="radio" name="radio1" value="TAK">TAK
                            <input type="radio" name="radio1" value="NIE">NIE
                    </td>
                </tr>
                <tr>
                    <td>Załącznik</td>
                    <td><input type="file" name="file"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Wyslij"></td>
                </tr>
            </table>
    </form>
    <?php
    if(checkVar()) {
        echo '<ul>';
        echo '<li>Imie i nazwisko: '.$NameAndSurname.'</li>';
        echo '<li>Email: '.$email.'</li>';
        echo '<li>Numer telefonu: '.$number.'</li>';
        echo '<li>Wybor z listy: '.$listaRozwijana.'</li>';
        echo '<li>Wiadomosc '.$textArea.'</li>';
        if(isset($_POST['checkBox1']) && isset($_POST['checkBox2'])) echo '<li>'.$checkBox1." i ".$checkBox2.'</li>';
        elseif(isset($_POST['checkBox1'])) echo '<li>'.$checkBox1.'</li>';
        elseif(isset($_POST['checkBox2'])) echo '<li>'.$checkBox2.'</li>';
        echo '<li>Czy posiada strone: '.$radio1.'</li>';
        echo '<li>Plik: '.$file.'</li>';
        echo '</ul>';
    }
    ?>
</body>
</html>


