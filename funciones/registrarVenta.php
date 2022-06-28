<?php
    include("../conexiones/conexion.php");

    
    $hoy = date("F j, Y, g:i a");
    //$hoy = "hghg";
    

    $Cantidad = $_POST['txtCantidad'];

    $PrecioVenta = $_POST['txtPrecioVenta'];
    $idProducto = $_POST['cmbProductoVenta'];

    
        $sentencia = "INSERT INTO productoventa VALUES(
            DEFAULT,
            $Cantidad,
            $PrecioVenta,
            '$hoy',
            '$idProducto')";

            if(mysqli_query($conexion, $sentencia)){
                header("Location: ../about.php");
            }else{
                echo "no";
            }

    mysqli_close($conexion);
?>
