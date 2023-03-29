<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Zad 3</title>
</head>
<body>
<?php
    function CheckVar(){
        return isset($_GET['dir'])&&isset($_GET['catalog'])&&isset($_GET['operation']);
    }
    function Menu($dir,$catalog,$operation){
        if($operation=='read') Read($dir,$catalog);
        elseif($operation=='delete') Delete($dir,$catalog);
        elseif($operation=='create') Create($dir,$catalog);
    }
    function Read($dir,$catalog){
        if(file_exists($dir.'/'.$catalog.'/')){
            $array = scandir($dir.'/'.$catalog.'/');
            echo "Lista plikow w lokalizacji: <br>";
            foreach ($array as $file){
                if($file != '.' && $file != '..' && $file != '.DS_Store')
                echo $file.'<br>';
            }
        }
        else echo "Katalog nie istnieje!";
    }
    function Delete($dir,$catalog){
        if(file_exists($dir.'/'.$catalog.'/')){
            $array = scandir($dir.'/'.$catalog.'/');
            unset($array[0]);
            unset($array[1]);
            if(sizeof($array)==0){
                rmdir($dir.'/'.$catalog.'/');
                echo "Usunieto katalog<br>";
                Read($dir,'');
            }
            else echo "Katalog nie jest pusty!";
        }
        else echo "Katalog nie istnieje!";
    }
    function Create($dir,$catalog){
        if(!file_exists($dir.'/'.$catalog.'/')){
            mkdir($dir.'/'.$catalog.'/');
            echo "Utworzono plik.<br>";
            Read($dir,'');
        }
        else echo "Katalog o tej nazwie istnieje";
    }
    $dir = './';
    $catalog = '';
    $operation = 'read';

    if(CheckVar()){
        $dir = $_GET['dir'];
        $catalog = $_GET['catalog'];
        $operation = $_GET['operation'];
    }

?>
    <div>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <table>
                <tr>
                    <td><input type="text" name="dir" placeholder="ściezka"></td>
                    <td><input type="text" name="catalog" placeholder="katalog"></td>
                    <td>
                        <select name="operation">
                            <option value="read">read</option>
                            <option value="delete">delete</option>
                            <option value="create">create</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Wykonaj"></td>
                </tr>
            </table>
        </form>
    </div>
<?php
    Menu($dir,$catalog,$operation);
?>
</body>
</html>