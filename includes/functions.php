<?php

function obtener_servicios() {
    try {   
        // import credentials
        require 'database.php';
        // write SQL query
        $sql = "SELECT * FROM servicios;";
        // use query
        $resultado = mysqli_query($db, $sql);
        // access data
                // echo "<pre>";
                // var_dump( mysqli_fetch_assoc($resultado) );
                // echo "</pre>";
        // close connection
        // $closed = mysqli_close($db); // returns true or false
        return $resultado;
    } catch (\Throwable $th) {
        //throw $th;
    }
}

obtener_servicios();