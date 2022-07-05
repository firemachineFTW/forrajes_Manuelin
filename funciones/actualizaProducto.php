<?php

include("../conexiones/conexion.php");

$idProducto = $_POST['txtIdProducto'];
    $descripcion = $_POST['txtDescripcion'];
    $precioFinal = $_POST['txtPrecioFinal'];
    $marca = $_POST['cmbMarca'];
    $categoria = $_POST['cmbCategoria'];



$sentencia = "UPDATE producto SET
 DescripcionProduceto = '$descripcion',
  PrecioFinal = '$precioFinal',
  IdCategoria = '$categoria',
  IdMarca = '$marca' 
 WHERE idProducto = '$idProducto'";

if (mysqli_query($conexion, $sentencia)) {

    header("Location: ../insertar.php");
} else {
    echo("no");
}



mysqli_close($conexion);
