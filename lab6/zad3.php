<?php
if(!isset($_COOKIE['licznik2'])) {
    setcookie('licznik2', true);
    if(!isset($_COOKIE["licznik"])) {
        setcookie("licznik", 1, time() + 60 * 60 * 24 * 14, '/');
        echo "Liczba odwiedzin: 1";
    }
    else{
        $cookie = $_COOKIE["licznik"] + 1;
        setcookie("licznik",$cookie,time()+60*60*24*14,'/');
        $licznik = $_COOKIE["licznik"]+1;
        echo "Liczba odwiedzin: ".$licznik;
    }
}
else {
    $licznik = $_COOKIE["licznik"];
    echo "Liczba odwiedzin: ".$licznik;
}
