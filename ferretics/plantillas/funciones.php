<?php
    function cargarProductos($producto_id, $producto){
        $salida = '';
        $salida = $salida . '<div class="card col-md-4">';
        $salida = $salida . '<div class="card-block">';
        $salida = $salida . '<h4 class="card-title">' . $producto["nombre"] . "</h4>";
        $salida = $salida . '<h6 class="card-subtitle text-muted">' . $producto["categoria"] . '</h6>';
        $salida = $salida . '</div>';
        $salida = $salida . '<img id="imagencatalogo" src="' . $producto["imagen"] . '" alt="Imagen del producto" class="img-rounded">';
        $salida = $salida . '<div class="card-block">';
        $salida = $salida . '<p class="card-text">' . $producto["descripcioncorta"] . '</p>';
        $salida = $salida . '<a href="verproducto.php?id='. $producto_id .'"><button type="button" class="btn btn-warning">Ver detalles...</button></a>';
        $salida = $salida . '</div>';
        $salida = $salida . '</div>';
        return $salida;
    }
?>