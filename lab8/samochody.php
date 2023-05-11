<?php
session_start();
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
    <?php
    $connection = mysqli_connect("localhost","root","root","mojaBaza");
    if(!$connection){
        mysqli_close($connection);
        echo "Błąd połączenia z bazą";
        exit();
    }
    $query = "SELECT id, marka, model, rok, cena FROM samochody ORDER BY rok;";
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
    echo "<table><tr><td>ID</td><td>MARKA</td><td>MODEL</td><td>CENA</td></tr>";

    while($row = mysqli_fetch_array($result)){
        echo "<form action=\"info.php\" method=\"get\">";
        echo "<tr>";
        echo "<td>";
        echo "<input type=\"submit\" name=\"id\" value=\"{$row['id']}\">";
        echo "</td>";
        echo "<td>{$row['marka']}</td>";
        echo "<td>{$row['model']}</td>";
        echo "<td>{$row['cena']}</td>";
        echo "</tr>";
        echo "</form>";
    }
    echo "</table>";
    mysqli_close($connection);
    ?>
</body>
</html>