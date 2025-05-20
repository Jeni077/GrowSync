
<!-- Aquí va el contenido de tu página principal -->

<!DOCTYPE html>
<html>
<head>
    <title>GrowSync</title>
    <meta charset="UTF-8">
    <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
</head>
<body style="background-color: #F5EEDC; background-size: cover;">


    <header>
        <h1>Vivero la Reina</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="controles">Controles</a></li>              
                <li><a href="automatizacion/usuario.php">AutomatizacionUsuario</a></li>              
                <li><a href="automatizacion/admin.php">AutomatizacionAdmin</a></li>
                <li><a href="productos/adminproducto.php">ProductosAdmin</a></li>              
                <li><a href="productos/usuarioproducto.php">ProductosUsuario</a></li>             
                <li><a href="productos/carritoproductoproducto.php">Carrito</a></li>             


            </ul>

            <div class="nav-buttons">
                    <a class="btn btn-outline-light" href="logout.php">Cerrar Sesión</a>
                 
            </div>
        </nav>
    </header>

    <main>
        <section class="nosotros" style="background: url('images/150.jpg');">
            <h2  style= color: white; >Bienvenidos a nuestro vivero </h2>
        </section>
        <section id="catalogo">
            <h2 style="text-align: left;">Noticias</h2>
            <div class="service-container">
                <div class="service-box">
                    <img src="./images/101.jpg" alt="Productos">
                    <h3>Productos</h3>
                    <p>Los productos orgánicos se cultivan sin el uso de pesticidas sintéticos y fertilizantes químicos.</p> 
                </div>
                <div class="service-box">
                    <img src="./images/102.jpg" alt="Medio Ambiente">
                    <h3>Medio Ambiente</h3>
                    <p>La ausencia de pesticidas químicos favorece la biodiversidad permitiendo que una variedad de organismos beneficiosos prosperen.</p>
                </div>
                <div class="service-box">
                    <img src="./images/156.jpg" alt="Economía">
                    <h3>Economía</h3>
                    <p>Comprar productos orgánicos a menudo significa apoyar a los agricultores locales que utilizan prácticas sostenibles.</p>
                </div>
            </div>
        </section>
        <section id="services" style="background: url('images/150.jpg') fixed; background-size: cover; background-color: #8abf76;">
            <h3 style="color: transparent;">Rich</h3>
        </section>
    </main>
    <footer class="footer">
        <p>&copy; 2024 La Reina S.A Todos los derechos reservados.</p>
    </footer>

</body>
</html>
