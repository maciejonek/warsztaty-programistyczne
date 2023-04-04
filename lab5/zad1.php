<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad 1</title>
</head>
<body>
<?php
    function ReverseArray($file){
        $array = [];
        if($f = fopen($file, "r")){
            while (!feof($f)){
                array_push($array,fgets($f));
            }
            $array = array_reverse($array);
            fclose($f);

        }
        else echo "Nie otworzono pliku";
        return $array;
    }
    function WriteToFile($file,$array){
        if($f = fopen($file,"w")){
            for($i = 0;$i<sizeof($array);$i++){
                fwrite($f,$array[$i]);
            }
            fclose($f);
            echo "Zamieniono wiersze";
        }
        else echo "Nie otworzono pliku";


    }
    $file = '';
    $array = array();
    if(isset($_GET['file'])){
        $file = $_GET['file'];
    }

?>
    <div>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <input type="file" name="file"><br>
            <input type="submit" value="Wyslij"><br>
        </form>
    </div>
<?php
    if(isset($_GET['file'])){
        $array = ReverseArray($file);
        WriteToFile($file,$array);
    }
?>
</body>
</html>
