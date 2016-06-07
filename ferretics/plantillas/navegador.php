<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php"><img src="img/logo.png" alt="logo" class="navbar-brand"></a>
            <a class="navbar-brand" href="index.php">FERRETIC'S</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li <?php if ($pagina == "index") {echo "class='active'";} ?>><a href="index.php">Inicio</a></li>
                <li <?php if ($pagina == "acercade") {echo "class='active'";} ?>><a href="acercade.php">¿Quienes Somos?</a></li>
                <li <?php if ($pagina == "contacto") {echo "class='active'";} ?>><a href="contacto.php">Contacto</a></li>
                <li <?php if ($pagina == "catalogo") {echo "class='active'";} ?>><a href="catalogo.php">Catalogo</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="form">
                <div class="form-group">
                    <input type="text" placeholder="Usuario" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Contraseña" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Iniciar Sesion</button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</nav>