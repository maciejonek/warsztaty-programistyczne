<?php
session_start();
echo $_SESSION['card'].' '.$_SESSION['name'].' '.$_SESSION['surname'].' liczba osob:'.$_SESSION['ppl'].' ';
session_destroy();
?>
