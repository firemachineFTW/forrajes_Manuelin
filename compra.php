<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>ForrajesTesji</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">Forrajes Tesji</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">Venta</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="insertar.php">Insertar</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="compra.php">Compra</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Compra directo con proveedor</h1>
                            <h2 class="subheading">Calidad y Precio</h2>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Formulario-->
        <form action="../forrajes_Manuelin/funciones/insertarCompra.php" method="POST">
        
            <h1>Registra tu compra llenando los siguientes campos</h1>
            
        
            <div class="form-group mb-3">
                <label for="exampleFormControlInput1">Codigo Producto</label>
                <select class="form-select" aria-label="Default select example" name="cmbcProducto" id="idProducto">
                    <option>--Seleccione una opcion--</option>
                    <?php
                    include("./conexiones/conexion.php");
                    $sentencia = "SELECT * FROM producto";
                    $resultado = mysqli_query($conexion, $sentencia);
                    while ($regProducto = mysqli_fetch_assoc($resultado)){
                        echo "
                                                <option value='" . $regProducto['idProducto'] . "'>" . $regProducto["DescripcionProduceto"] . "</option>";
                    }
                    mysqli_close($conexion);

                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Cantidad Compra</label>
                <input type="number" class="form-control" name="txtCantidadCompra" id="CantidadCompra" placeholder="" required maxlength="6">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Fecha y Hora de la compra</label>
                <input type="" class="form-control" name="txtFechaHoraCompra" id="FechaHoraCompra" placeholder="" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Pecio Compra</label>
                <input type="number" class="form-control" name="txtpCompra" id="PrecioCompra" placeholder="" required maxlength="10">
            </div>  
            <div class="form-group mb-3">
                <label for="exampleFormControlInput1">Proveedor</label>
                <select class="form-select" aria-label="Default select example" name="cmbProveedor" id="idProveedor">
                    <option>--Seleccione una opcion--</option>
                    <?php
                    include("./conexiones/conexion.php");
                    $sentencia = "SELECT * FROM proveedor";
                    $resultado = mysqli_query($conexion, $sentencia);
                    while ($regProveedor = mysqli_fetch_assoc($resultado)){
                        echo "
                                                <option value='" . $regProveedor['IdProveedor'] . "'>" . $regProveedor["NombreProveedor"] . "</option>";
                    }
                    mysqli_close($conexion);

                    ?>
                </select>
            </div>
            <div class="mb-3">
                <button  class="btn btn-success">Guardar</button>
                <a class="btn btn-danger" href="./compra.php" role="button">Cancelar</a>
        
        
            </div>
                               
        </form>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2022</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
