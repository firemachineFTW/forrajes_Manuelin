<?php
    include("../conexiones/conexion.php");

    $idVenta = $_POST['txtFolio'];
    $FechaHoraVenta = $_POST['txtFecha'];
    $TotalVenta = $_POST['txtTotal'];
    $idProductoVenta = $_POST['txtCodigoProducto'];
    $Cantidad = $_POST['txtCantidad'];
    $PrecioVenta = $_POST['txtPrecioVenta'];
    $idProducto = $_POST['cmbProductoVenta'];

    $sentencia = "INSERT INTO venta VALUES(
        '$idVenta',
        '$FechaHoraVenta',
        '$TotalVenta')";

    
        
    if(mysqli_query($conexion, $sentencia)){
        $sentencia1 = "INSERT INTO productoventa VALUES(
            DEFAULT,
            '$idVenta',
            '$Cantidad',
            '$PrecioVenta',
            '$idProducto')";

            if(mysqli_query($conexion, $sentencia1)){
                header("Location: ../index.html");
            }else{
                echo "no";
            }
        
    }else{
        echo "no";
    }

    mysqli_close($conexion);
?>
