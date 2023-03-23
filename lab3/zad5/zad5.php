<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
    <title>Zad 5</title>
</head>
<body>
<?php
function LoginCheck($user,$password){
    return $user == 'admin123' && $password == 'admin123';
}
function checkVar(){
    return isset($_POST['user']) && isset($_POST['password']);
}
function Validation($user,$password){
    $pattern = "/^\S*(?=\S{4,32})(?=\S*[a-z])(?=\S*[\d])\S*$/";
    return preg_match($pattern,$user) && preg_match($pattern,$password);
}

$user = '';
$password = '';
$mess1 = '';
$mess2 = '';
$mess3 = '';
if(checkVar()){
    $user = $_POST['user'];
    $password = $_POST['password'];
}
?>
    <div class="Box">
        <div>
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <table>
                    <tr>
                        <td><input type="text" name="user" class="field"placeholder="username" required></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" class="field" placeholder="password" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="LOGIN" id="login"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <div class="BoxBottom">
        <div id="outputText">
            <?php
            if($user!='' && $password!='') {
                if(!Validation($user,$password)){
                    echo '<p class="textBox">ZLY FORMAT DANYCH</p>';
                    echo '<p class="textBox">DŁUGOSC MIN. 4 MAX. 32 ZNAKI</p>';
                    echo '<p class="textBox">MIN 1 CYFRA I 1 LITERA </p>';
                }
                else if (LoginCheck($user, $password)) echo '<p class="textBox">POPRAWNIE ZALOGOWANO</p>';
                else{
                    echo '<p class="textBox">BLAD LOGOWANIA, PODANO:</p>';
                    echo '<p class="textBox">USER: '.$user.'</p>';
                    echo '<p class="textBox">PASSWORD: '.$password.'</p>';
                }
            }
            ?>
        </div>
    </div>
</body>
</html>