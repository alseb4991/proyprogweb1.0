<?php
    include('simulacionbd/productos.php');
    include('plantillas/funciones.php')
?>
<!doctype html>
<html class="no-js" lang="es">
    <head>
        <?php
            if(isset($_GET["id"])){
                $producto_id = $_GET["id"];
                if(isset($productos[$producto_id])){
                    $producto = $productos[$producto_id];
                }
            }else{
                header("Location: catalogo.php");
            }
            $titulopagina = "FerreTIC's - ".$producto['nombre'];
            $pagina = "verproducto";
        include('plantillas/cabecera.php');
        ?>
    </head>
    <body>
        <?php include('plantillas/navegador.php'); ?>
        <div class="container">
              <div class="row">
               <div class="card">
                <div class="card-block">
                    <h2 class="card-title"><?php echo $producto['nombre'];?></h2>
                    <h4 class="card-subtitle text-muted"><?php echo $producto['categoria'];?></h4>
                </div>
                <img src="<?php echo $producto['imagen'];?>" alt="Card image" style="max-width: 100%;">
                <div class="card-block">
                    <p class="card-text"><?php echo $producto['descripcion'];?></p>
                    <h4><span class="label label-danger"><?php echo "Precio: $".$producto['precio'].".00";?></span></h4>
                    <a href="#"><button type="button" class="btn btn-warning">Añadir al Carrito...</button></a>
                </div>
            </div>
            </div>
        </div>
        <?php include('plantillas/marcadeagua.php'); ?> 
        <?php include('plantillas/piedepagina.php'); ?>        
    </body>
</html>