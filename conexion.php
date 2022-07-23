<?php

    $host = "us-cdbr-east-06.cleardb.net";
    $user = "bb03931d570c05";
    $clave = "6a7308bc";
    $bd = "heroku_d271f510461f746";

    $conexion = mysqli_connect($host,$user,$clave,$bd);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }

    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");

    mysqli_set_charset($conexion,"utf8");


?>
