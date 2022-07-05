<?php

    include("../conexiones/conexion.php");

    $idProducto = $_GET['idProducto'];
    


    $sentencia = "DELETE FROM producto WHERE idProducto='$idProducto'";

    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../insertar.php");
    }else{
        echo "no";
    }

    mysqli_close($conexion);


