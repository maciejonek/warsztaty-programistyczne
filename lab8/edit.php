<?php
session_start();
?>
<?php
    function checkVar(){
        return isset($_GET['marka']) && isset($_GET['model']) && isset($_GET['cena']) && isset($_GET['rok']) && isset($_GET['opis']);
    }

    $id = $_GET['id'];

    $connection = mysqli_connect("localhost", "root", "root", "mojaBaza");
    if (!$connection) {
        mysqli_close($connection);
        echo "Błąd połączenia z bazą";
        exit();
    }
    $query = "SELECT * FROM samochody WHERE id='{$id}'";
    $result = mysqli_query($connection,$query);
    if (!mysqli_query($connection, $query)) {
        mysqli_close($connection);
        echo "Bład zapytania";
        exit();
    }
    mysqli_close($connection);
    $row = mysqli_fetch_array($result);
    $marka = '';
    $model = '';
    $cena = '';
    $rok = '';
    $opis = '';
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
    if(isset($_SESSION['login'])) echo $_SESSION['login'].' '.$_SESSION['id'];
    else echo "nie zalogowano";
?>
    <table>
        <tr>
            <td><a href="index.php">Strona główna</a></td>
            <td><a href="samochody.php">Wszystkie samochody</a></td>
            <td><a href="add.php">Dodaj samochod</a></td>
            <?php
            if(isset($_SESSION['login']))
                echo "<td><a href='mycars.php'>Moje samochody</a></td>"
            ?>
            <td><a href="login.php">Login</a></td>
            <td><a href="register.php">Register</a></td>
            <td><a href="logout.php">Logout</a></td>
        </tr>
    </table>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="text" name="marka" placeholder="marka" value="<?php echo $row['marka']?>">
        <input type="text" name="model" placeholder="model" value="<?php echo $row['model']?>">
        <input type="number" name="cena" placeholder="cena" value="<?php echo $row['cena']?>">
        <input type="number" name="rok" placeholder="rok" value="<?php echo $row['rok']?>"><br>
        <textarea name="opis" cols="30" rows="10""></textarea>
        <input type="submit" value="dodaj">
        <?php
        if($row['id_uzytkownik']==$_SESSION['id'] || $_SESSION['userType'] == 2){
            if(checkVar()) {
                $id = $_GET['id'];
                $marka = $_GET['marka'];
                $model = $_GET['model'];
                $cena = $_GET['cena'];
                $rok = $_GET['rok'];
                $opis = $_GET['opis'];

                $connection = mysqli_connect("localhost", "root", "root", "mojaBaza");
                if (!$connection) {
                    mysqli_close($connection);
                    echo "Błąd połączenia z bazą";
                    exit();
                }
                $query = "UPDATE samochody SET marka = '{$marka}',model = '{$model}',cena = '{$cena}',rok = '{$rok}',opis = '{$opis}' WHERE id='$id'";
                if (!mysqli_query($connection, $query)) {
                    mysqli_close($connection);
                    echo "Bład zapytania";
                    exit();
                }
                mysqli_close($connection);
            }
        }
        else{
            echo "ten samochod nie nalezy do ciebie!";
        }

        ?>
    </form>
</body>
</html>