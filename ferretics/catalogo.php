<?php
    include('simulacionbd/productos.php');
    include('plantillas/funciones.php')
?>
<!doctype html>
<html class="no-js" lang="es">
    <head>
        <?php 
        $titulopagina = "FerreTIC's - Catalogo";
        $pagina = "catalogo";
        include('plantillas/cabecera.php');
        ?>
    </head>
    <body>
    	<?php include('plantillas/navegador.php'); ?>
        <div class="container">
            <div class="row">
                <?php
                    foreach ($productos as $producto_id => $producto) {
                       echo cargarProductos($producto_id, $producto); 
                    } 
                ?>
            </div>
        </div>
        <?php include('plantillas/marcadeagua.php'); ?>
        <?php include('plantillas/piedepagina.php'); ?>
    </body>
</html>