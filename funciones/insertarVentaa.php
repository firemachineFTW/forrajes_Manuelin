<?php

    include("../conexiones/conexion.php");

    $cantidad = $_POST['txtCantidad'];
    $precio = $_POST['txtVenta'];
    $fecha = $_POST['txtFechaHoraVenta'];
    $producto = $_POST['cmbProducto'];

    $sentencia = "INSERT INTO `forrajesss`.`productoventa`(`Cantidad`, `PrecioVenta`, `FechaHoraVenta`, `idProducto`) VALUES ('$cantidad', '$precio', '$fecha', '$producto')";

    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../index.html");
    }else{
        echo "no";
    }

    mysqli_close($conexion);


