<?php
    include("../conexiones/conexion.php");

    
    $FechaHoraVenta = $_POST['txtFecha'];

    $TotalVenta = $_POST['txtTotal'];

    

    $Cantidad = $_POST['txtCantidad'];

    $PrecioVenta = $_POST['txtPrecioVenta'];
    $idProducto = $_POST['cmbProductoVenta'];

    $sentencia = "INSERT INTO venta VALUES(
        DEFAULT,
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
