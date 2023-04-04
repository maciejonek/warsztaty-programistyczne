<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad 2</title>
</head>
<body>
<?php
    function Visits(){
        if(!file_exists('licznik.txt'))
        file_put_contents('licznik.txt',1);
        else{
            $licznik = file_get_contents('licznik.txt') + 1;
            file_put_contents('licznik.txt',$licznik);
        }
    }
    Visits();
?>
    <div>
        <h1>HI</h1>
    </div>
</body>
</html>
