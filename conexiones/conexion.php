<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "firemachineFTW.23";
    $db = "forrajesss";

    $conexion = mysqli_connect(
        $servidor,
        $usuario,
        $password,
        $db) OR DIE
        ("No se puede conectar......".mysqli_connect_error());
?>