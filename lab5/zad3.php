<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad 3</title>
</head>
<body>
<?php
    function checkVar(){
        return isset($_GET['adres']) && isset($_GET['opis']);
    }
    function AddToFile($adres,$opis){
        if(!file_exists('adresy.txt'))
            file_put_contents('adresy.txt','');
        $msg = $adres.';'.$opis.PHP_EOL;
        file_put_contents('adresy.txt',$msg,FILE_APPEND);
    }

    $adres = '';
    $opis = '';
    if(checkVar()){
        $adres = $_GET['adres'];
        $opis = $_GET['opis'];
        if($adres!='' && $opis!='') AddToFile($adres,$opis);
    }

?>
    <div>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="GET">
            <input type="url" name="adres">
            <input type="text" name="opis"><br>
            <input type="submit" value="Wstaw do pliku">
        </form>
    </div>
</body>
</html>
