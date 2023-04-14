<?php
session_start();
$_SESSION['card'] = '';
$_SESSION['name'] = '';
$_SESSION['surname'] = '';
$_SESSION['ppl'] = '';
function checkVar(){
    return isset($_GET['card']) && isset($_GET['name']) && isset($_GET['surname']) && isset($_GET['ppl']);
}
if(checkVar()){
    $_SESSION['card'] = $_GET['card'];
    $_SESSION['name'] = $_GET['name'];
    $_SESSION['surname'] = $_GET['surname'];
    $_SESSION['ppl'] = $_GET['ppl'];
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
    <div>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <input type="text" name="card" placeholder="Karta">
        <input type="text" name="name" placeholder="Imię">
        <input type="text" name="surname" placeholder="Nazwisko">
        <input type="number" name="ppl" placeholder="Ilosc osob">
        <input type="submit" value="zapisz">
        </form>
        <form action="result.php">
            <input type="submit" value="Nastepna strona">
        </form>
    </div>
</body>
</html>