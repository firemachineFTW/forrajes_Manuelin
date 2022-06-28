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

    <script
        src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous">
    </script>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="venta.php">Venta</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="insertar.php">Insertar</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="compra.php">Compra</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/perro1-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>Perros... ¿La alegria del hogar?</h1>
                        <h2 class="subheading">Consientelos con ¡los mejores alimentos!</h2>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--FORMULARIO--->
    <form action="../forrajes_Manuelin/funciones/insertarProducto.php" method="POST">


    <div class="mb-3">
            <label for="" class="form-label">Codigo Producto</label>
            <input type="text" class="form-control" name="txtIdProducto" id="IdProducto" placeholder="" required maxlength="6">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="txtDescripcion" id="Descripcion" placeholder="" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio Final</label>
            <input type="number" class="form-control" name="txtPrecioFinal" id="PrecioFinal" placeholder="" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="exampleFormControlInput1">Categoria</label>
            <select class="form-select" aria-label="Default select example" name="cmbCategoria" id="idCategoria">
                <option>--Seleccione una opcion--</option>
                <?php
                include("./conexiones/conexion.php");
                $sentencia = "SELECT * FROM  categoria";
                $resultado = mysqli_query($conexion, $sentencia);
                while ($regCategoria = mysqli_fetch_assoc($resultado)) {
                    echo "
					                          <option value='" . $regCategoria['IdCategoria'] . "'>" . $regCategoria["NombreCategoria"] . "</option>";
                }
                mysqli_close($conexion);

                ?>
            </select>
        </div>


        <div class="form-group mb-3">
            <label for="exampleFormControlInput1">Marca</label>
            <select class="form-select" aria-label="Default select example" name="cmbMarca" id="idMarca">
                <option>--Seleccione una opcion--</option>
                <?php
                include("./conexiones/conexion.php");
                $sentencia = "SELECT * FROM  Marca";
                $resultado = mysqli_query($conexion, $sentencia);
                while ($regMarca = mysqli_fetch_assoc($resultado)) {
                    echo "
					                          <option value='" . $regMarca['IdMarca'] . "'>" . $regMarca["NombreMarca"] . "</option>";
                }
                mysqli_close($conexion);

                ?>
            </select>
        </div>

        <div class="mb-3">
            <button  class="btn btn-success">Guardar</button>
            <a class="btn btn-danger" href="./insertar.php" role="button">Cancelar</a>


        </div>
    </form>


    <div id="form" class="form">
    
    <div class="fish" id="fish"></div>
    <div class="fish" id="fish2"></div>

    
    <form id="formEnviar" name="formEnviar" >
        <div class="formgroup" id="name-form">
           
        </div>
        <div class="formgroup" id="message-form">
            <label >Datos productos: </label>
            <div id="tablaUpdate"></div>
        </div>
    </form>
</div>
<script src="JS/funciones.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        setInterval(
            function(){
                $('#tablaUpdate').load('tabla.php');
            },2000
        );
    });
</script>

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