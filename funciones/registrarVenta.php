<?php
    include("../conexiones/conexion.php");

    $idVenta = $_POST['txtFolio'];
    $FechaHoraVenta = $_POST['txtFecha'];
    $TotalVenta = $_POST['txtTotal'];

    $sentencia = "INSERT INTO venta VALUES(
        '$idVenta',
        '$FechaHoraVenta',
        '$TotalVenta');"

     echo 
     (mysqli_query($conexion, $sentencia)){
        header("Location: ../index.html");
    }else{
        echo "no";
    }

    mysqli_close($conexion);
?>
