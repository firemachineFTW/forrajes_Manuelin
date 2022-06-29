<?php

    include("../conexiones/conexion.php");

    $cantidad = $_POST['txtCantidad'];
    $precio = $_POST['txtVenta'];
    $fecha = $_POST['txtFechaHoraVenta'];
    $producto = $_POST['cmbProducto'];


    $sentencia3 = "SELECT stock FROM producto WHERE idProducto='$producto' AND '$cantidad'<stock";
        if(mysqli_query($conexion,$sentencia3)){
            
            $sentencia = "INSERT INTO `forrajesss`.`productoventa`(`Cantidad`, `PrecioVenta`, `FechaHoraVenta`, `idProducto`) VALUES ('$cantidad', '$precio', '$fecha', '$producto')";

    if(mysqli_query($conexion,$sentencia)){
        $sentencia2 = "UPDATE producto SET stock=stock-'$cantidad' WHERE idProducto='$producto'";
        if(mysqli_query($conexion,$sentencia2)){
            
            header("Location: ../insertar.php");
        }else{
            echo "no1";
        }
        
    }else{
        echo "no2";
    }
        }else{
            echo "no pp";
        }

    

    mysqli_close($conexion);


