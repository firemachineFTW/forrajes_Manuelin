<?php
    include("../conexiones/conexion.php");

    $idVenta = $_POST['txtFolio'];
    $idProductoVenta = $_POST['txtCodigoProducto'];
    $idVenta = $_POST['txtFolio'];
    $FechaHoraVenta = $_POST['txtFecha'];
    $TotalVenta = $_POST['txtTotal'];
    $Cantidad = $_POST['txtCantidad'];
    $PrecioVenta = $_POST['txtPrecioVenta'];
    $idProducto = $_POST['cmbProductoVenta'];

    $sentencia = "INSERT INTO productoventa VALUES(
        '$idProductoVenta',
        '$idVenta',
        '$Cantidad',
        '$PrecioVenta',
        '$idProducto')";

    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../index.html");
    }else{
        echo "no";
    }

    mysqli_close($conexion);
?>