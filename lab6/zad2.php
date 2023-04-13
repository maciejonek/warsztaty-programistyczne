<?php
if(!isset($_COOKIE["licznik"])) {
    echo "nie ma cookie";
    setcookie("licznik", 1, time() + 60 * 60 * 24 * 14, '/');
}
else{
    $cookie = $_COOKIE["licznik"] + 1;
    setcookie("licznik",$cookie,time()+60*60*24*14,'/');
    echo "Odwiedziles stronę: ".$_COOKIE["licznik"]." razy.";
}

?>