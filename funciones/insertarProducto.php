<?php

    include("../conexiones/conexion.php");

    $idProducto = $_POST['txtIdProducto'];
    $descripcion = $_POST['txtDescripcion'];
    $precioFinal = $_POST['txtPrecioFinal'];
    $marca = $_POST['cmbMarca'];
    $categoria = $_POST['cmbCategoria'];

    $sentencia = "INSERT INTO producto VALUES(
        '$idProducto',
        '$descripcion',
        '$precioFinal',
        '$categoria',
        '$marca')";

    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../index.html");
    }else{
        echo "no";
    }

    mysqli_close($conexion);

