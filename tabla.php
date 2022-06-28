<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped" id="tb">
                <thead>
                    <tr>
                        <th scope="col">Categoria</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio Final</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Actualizar</th>
                </thead>
                <tbody>
                    <?php
                    include("../planti/conexiones/conexion.php"); //importar la conexion
                    $sentencia1 = "SELECT
                        producto.idProducto, 
                        producto.DescripcionProduceto, 
                        producto.PrecioFinal, 
                        producto.stock, 
                        categoria.NombreCategoria, 
                        marca.NombreMarca
                    FROM
                        categoria
                        INNER JOIN
                        producto
                        ON 
                            categoria.IdCategoria = producto.IdCategoria
                        INNER JOIN
                        marca
                        ON 
                            producto.IdMarca = marca.IdMarca";

                    $resultado1 = mysqli_query($conexion, $sentencia1);

                    while ($mostrar1 = mysqli_fetch_assoc($resultado1)) {
                        echo "
                                <tr>
                                   <td>" . $mostrar1["NombreCategoria"] . "</td>
                                   <td>" . $mostrar1["NombreMarca"] . "</td>
                                   <td>" . $mostrar1["idProducto"] . "</td>
                                   <td>" . $mostrar1["DescripcionProduceto"] . "</td>
                                   <td>" . $mostrar1["PrecioFinal"] . "</td>
                                   <td>" . $mostrar1["stock"] . "</td>  
                                   <td><a href='updateproducto.php?idProducto=".$mostrar1["idProducto"]."'><i class='fas fa-edit'></a></i></td>                                  
                                </tr>";
                    }
                    mysqli_close($conexion);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>