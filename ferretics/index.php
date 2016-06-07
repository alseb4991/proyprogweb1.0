<!doctype html>
<html class="no-js" lang="es">
    <head>
        <?php 
        $titulopagina = "FerreTIC's - Inicio";
        $pagina = "index";
        include('plantillas/cabecera.php');
        ?>
    </head>
    <body>
        <?php include('plantillas/navegador.php'); ?>
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <h1><span class="label label-pill label-default">Bienvenido a FerreTIC's</span></h1>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <h1>¿Quienes Somos?</h1>
                    <p>Enterate de los inicios de nuestra empresa, sus fundadores, asi como una breve descripcion de nuestro trabajo, vision, mision y valores que fomentamos en la empresa...</p>
                    <a href="acercade.php"><button type="button" class="btn btn-warning">Conozca mas...</button></a>
                </div>
                <div class="col-md-4">
                    <h1>Catalogo</h1>
                    <p>Echa un vistazo a toda la variedad de productos que tenemos para ofrecerte, estamos seguros que podremos cumplir con tus necesidades...</p>
                    <a href="catalogo.php"><button type="button" class="btn btn-info">Visualizar catalogo...</button></a>
                </div>
                <div class="col-md-4">
                    <h1>Contacto</h1>
                    <p>Conoce las diferentes alternativas para comunicarnos y obtengas una atencion personalizada, estamos dispuestos a resolver todas tus dudas...</p>
                    <a href="contacto.php"><button type="button" class="btn btn-danger">Ver datos de contacto...</button></a>
                </div>
            </div>
            <?php include('plantillas/marcadeagua.php'); ?>
        </div> 
        <?php include('plantillas/piedepagina.php'); ?>        
    </body>
</html>