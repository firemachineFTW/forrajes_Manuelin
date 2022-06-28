<?php

    include("../conexiones/conexion.php");

    $idProducto = $_POST['cmbcProducto'];
    $CantidadCompra = $_POST['txtCantidadCompra'];
    $FechaHoraCompra = $_POST['txtFechaHoraCompra'];
    $PrecioCompra = $_POST['txtpCompra'];
    $IdProveedor = $_POST['cmbProveedor'];

    $sentencia = "INSERT INTO compra VALUES(
         DEFAULT,
        '$idProducto',
        '$CantidadCompra',
        '$FechaHoraCompra',
        '$PrecioCompra',
        '$IdProveedor')";

    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../index.html");
    }else{
        echo "no";
    }

    mysqli_close($conexion);