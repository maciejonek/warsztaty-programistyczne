<?php
$connection = mysqli_connect("localhost", "root", "root", "mojaBaza");
if (!$connection) {
    mysqli_close($connection);
    echo "Błąd połączenia z bazą";
    exit();
}