<?php

include("../conexiones/conexion.php");

$idProducto = $_POST['cmbcProducto'];
$CantidadCompra = $_POST['txtCantidadCompra'];
$FechaHoraCompra = $_POST['txtFechaHoraCompra'];
$PrecioCompra = $_POST['txtpCompra'];
$IdProveedor = $_POST['cmbProveedor'];



$sentencia = "UPDATE producto SET stock=stock+'$CantidadCompra' WHERE idProducto='$idProducto'";

if (mysqli_query($conexion, $sentencia)) {


    $sentencia2 = "INSERT INTO compra VALUES(
            DEFAULT,
           '$idProducto',
           '$CantidadCompra',
           '$FechaHoraCompra',
           '$PrecioCompra',
           '$IdProveedor')";
    if (mysqli_query($conexion, $sentencia2)) {

        header("Location: ../index.html");
    } else {
        echo "no";
    }
} else {
    header("Location: ../insertar.php");
}



mysqli_close($conexion);
