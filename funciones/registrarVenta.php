<?php
    include("../conexiones/conexion.php");

    
    $FechaHoraVenta = date('Y');

    

    $Cantidad = $_POST['txtCantidad'];

    $PrecioVenta = $_POST['txtPrecioVenta'];
    $idProducto = $_POST['cmbProductoVenta'];

    
        $sentencia = "INSERT INTO productoventa VALUES(
            DEFAULT,
            '$Cantidad',
            '$PrecioVenta',
            '$FechaHoraVenta',
            '$idProducto')";

            if(mysqli_query($conexion, $sentencia)){
                header("Location: ../about.php");
            }else{
                echo "no";
            }

    mysqli_close($conexion);
?>
