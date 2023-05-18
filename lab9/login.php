<?php
require 'BasicOperations/sessionControl.php';
function checkVar(){
    return isset($_POST['login']) && isset($_POST['password']);
}
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
            echo "<td><a href='mycars.php'>Moje samochody</a></td>";

        ?>
        <td><a href="login.php">Login</a></td>
        <td><a href="register.php">Register</a></td>
        <td><a href="logout.php">Logout</a></td>
    </tr>
</table>
<table>
    <tr>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <td><input type="text" name="login" placeholder="login"></td>
        <td><input type="text" name="password" placeholder="password"></td>
        <td><input type="submit" value="Login"></td>
        </form>
    </tr>
</table>
<?php
    $login = '';
    $password = '';
    if(checkVar()){
        $login = $_POST['login'];
        $password = $_POST['password'];
        $query = "SELECT * FROM uzytkownik WHERE login = '$login' AND haslo = '$password';";
        $connection = mysqli_connect("localhost","root","root","mojaBaza");
        if(!$connection){
            mysqli_close($connection);
            echo "Błąd połączenia z bazą";
            exit();
        }

        $result = mysqli_query($connection,$query);
        if(!mysqli_query($connection,$query)){
            mysqli_close($connection);
            echo "Bład zapytania";
            exit();
        }

        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $user = new User($row['id'],$row['login'],$row['id_rola']);
            $_SESSION['user'] = $user;
            echo "zalogowano";
        }
        else echo "bledny login lub haslo";
    }
?>
</body>
</html>