<?php

include("../conexiones/conexion.php");

$cantidad = $_POST['txtCantidad'];
$producto = $_POST['cmbProducto'];

$servidor = "localhost";
$usuario = "root";
$password = "12345";
$db = "forrajesss";

$conexionValidacion = mysqli_connect($servidor, $usuario, $password, $db) or die("No se pudo conectar la Base de Datos" . mysqli_connect_error());

                                            
$query = mysqli_query($conexionValidacion, "SELECT * FROM producto WHERE idProducto='". $producto ."' AND  '".$cantidad."'<stock");
$siNo = mysqli_num_rows($query);


$precio = $_POST['txtVenta'];
$fecha = $_POST['txtFechaHoraVenta'];


if ($siNo == 1) {
                  
    $sentencia = "INSERT INTO productoventa(Cantidad,PrecioVenta,FechaHoraVenta,idProducto)
     VALUES(
        $cantidad,
        $precio,
        '$fecha', 
        '$producto')";

    if (mysqli_query($conexion, $sentencia)) {
        $sentencia2 = "UPDATE producto SET stock=stock-'$cantidad' WHERE idProducto='$producto'";
        if (mysqli_query($conexion, $sentencia2)) {

            header("Location: ../insertar.php");
        } else {
            echo "no1";
        }
    } else {
        echo "no2";
    }
}
/*else if ($siNo == 0){*/ else {
    header("Location: ../venta.php");  
}

mysqli_close($conexion);
