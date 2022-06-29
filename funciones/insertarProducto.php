<?php

    include("../conexiones/conexion.php");

    $idProducto = $_POST['txtIdProducto'];
    $descripcion = $_POST['txtDescripcion'];
    $precioFinal = $_POST['txtPrecioFinal'];
    $marca = $_POST['cmbMarca'];
    $categoria = $_POST['cmbCategoria'];
    $stock = 0;


    $sentencia = "INSERT INTO producto VALUES(
        '$idProducto',
        '$descripcion',
        '$precioFinal',
        '$stock',
        '$categoria',
        '$marca')";

    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../insertar.php");
    }else{
        echo "no";
    }

    mysqli_close($conexion);


