<?php
function ChangeFile($address){
    if(file_exists('ip.txt')) {
        $ip = file('ip.txt');
        foreach ($ip as $i) if($address==gethostbyname($i)) {
            include 'ippage.php';
            return;
        }
    }
    include 'mainpage.php';
}
ChangeFile($_SERVER['REMOTE_ADDR']);

