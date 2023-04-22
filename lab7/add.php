<?php
    function checkVar(){
        return isset($_GET['marka']) && isset($_GET['model']) && isset($_GET['cena']) && isset($_GET['rok']) && isset($_GET['opis']);
    }
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
    <table>
        <tr>
            <td><a href="index.php">Strona główna</a></td>
            <td><a href="samochody.php">Wszystkie samochody</a></td>
            <td><a href="add.php">Dodaj samochod</a></td>
        </tr>
    </table>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <input type="text" name="marka" placeholder="marka">
        <input type="text" name="model" placeholder="model">
        <input type="number" name="cena" placeholder="cena">
        <input type="number" name="rok" placeholder="rok"><br>
        <textarea name="opis" cols="30" rows="10"></textarea>
        <input type="submit" value="dodaj">
        <?php
        if(checkVar()) {
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
            $query = "INSERT INTO samochody (marka,model,cena,rok,opis) VALUES ('{$marka}','{$model}','{$cena}','{$rok}','{$opis}');";
            if (!mysqli_query($connection, $query)) {
                mysqli_close($connection);
                echo "Bład zapytania";
                exit();
            }
            echo "dodano";
            mysqli_close($connection);
        }
        ?>
    </form>
</body>
</html>