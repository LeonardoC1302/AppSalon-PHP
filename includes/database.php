<?php

$db = mysqli_connect('localhost', 'root', '123', 'appsalon');
if(!$db){
    echo "Error en la conexión";
    exit;
}

?>