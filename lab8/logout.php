<?php
session_start();
session_destroy();
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
        <td><a href="login.php">Login</a></td>
        <td><a href="register.php">Register</a></td>
        <td><a href="logout.php">Logout</a></td>
    </tr>
</table>
<h2>Wylogowano</h2>
</body>
</html>