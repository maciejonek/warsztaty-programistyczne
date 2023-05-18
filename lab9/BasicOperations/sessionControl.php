<?php
function classLoader($class){
    include "Classes".DIRECTORY_SEPARATOR.$class.'.php';
}
spl_autoload_register('classLoader');

session_start();

if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
}