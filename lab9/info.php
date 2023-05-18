<?php
require 'BasicOperations/sessionControl.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require 'BasicOperations/LoginStatus.php';
?>
    <table>
        <tr>
            <td><a href="index.php">Strona główna</a></td>
            <td><a href="samochody.php">Wszystkie samochody</a></td>
            <td><a href="add.php">Dodaj samochod</a></td>
            <?php
            if(isset($user))
                echo "<td><a href='mycars.php'>Moje samochody</a></td>"
            ?>
            <td><a href="login.php">Login</a></td>
            <td><a href="register.php">Register</a></td>
            <td><a href="logout.php">Logout</a></td>
        </tr>
    </table>
    <?php
    $id = $_GET['id'];
    $connection = mysqli_connect("localhost","root","root","mojaBaza");
    if(!$connection){
        mysqli_close($connection);
        echo "Błąd połączenia z bazą";
        exit();
    }
    $query = "SELECT * FROM samochody WHERE id = \"{$id}\";";
    $result = mysqli_query($connection,$query);
    if(!mysqli_query($connection,$query)){
        mysqli_close($connection);
        echo "Bład zapytania";
        exit();
    }
    if(mysqli_num_rows($result)==0){
        mysqli_close($connection);
        echo "brak samochodow na stanie";
        exit();
    }
    $info = mysqli_fetch_array($result);
    echo 'ID: '.$info['id'];
    echo '<br>Marka: '.$info['marka'];
    echo '<br>Model: '.$info['model'];
    echo '<br>Rok: '.$info['rok'];
    echo '<br>Cena: '.$info['cena'];
    echo '<br>Opis: '.$info['opis'];
    mysqli_close($connection);
    ?>
</body>
</html>