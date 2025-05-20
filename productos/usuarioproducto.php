
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos- Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
<header class="header" style="background-color: #2c5f2c;">
        <nav class="navbar navbar-expand-lg" style="background-color: #2c5f2c;">
            <div class="container-fluid">
                <a class="navbar-brand" href="../" style="color: white;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                    <li><a href="../">Inicio</a></li>
                <li><a href="../controles">Controles</a></li>              
                <li><a href="../automatizacion/usuario.php">AutomatizacionUsuario</a></li>              
                <li><a href="../automatizacion/admin.php">AutomatizacionAdmin</a></li>
                <li><a href="../productos/adminproducto.php">ProductosAdmin</a></li>              
                <li><a href="../productos/usuarioproducto.php">ProductosUsuario</a></li>             
                <li><a href="../productos/carritoproducto.php">Carrito</a></li>                


                    </ul>
                    <div class="d-flex">
                       
                            <a class="btn btn-light mx-2" href="../index_category.php">Cerrar Sesión</a>
                       
                           
                    </div>
                </div>
            </div>
        </nav>
    </header>

<body>

<div class="container mt-5">
  <h2 class="text-center mb-4">Productos Disponibles</h2>

  <div class="row row-cols-1 row-cols-md-3 g-4">

    <!-- Producto 1 -->
  

    <!-- Producto 2 -->
    <div class="col">
      <div class="card h-100">
      <img src="https://content.cuerpomente.com/medio/2021/11/17/maceta-con-orquidea-en-un-alfeizar_9512f96a_1200x1200.jpg" class="card-img-top" alt="Orquidea">
      <div class="card-body">
      <h5 class="card-title">Mini Orquidea</h5>
          <p class="card-text">Tipo: ornamnetal, poca agua y sol.</p>
          <p class="fw-bold text-success">₡6.500</p>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-outline-success btn-sm">Añadir al Carrito 🛒</button>
        </div>
      </div>
    </div>

    <!-- Producto 3 -->
    <div class="col">
      <div class="card h-100">
      <img src="https://estag.fimagenes.com/img/4/2/j/H/v/2jHv_900.jpg" class="card-img-top" alt="Lantanas">
      <div class="card-body">
      <h5 class="card-title">Lantanas</h5>
          <p class="card-text">Tipo: ornamental de sol.</p>
          <p class="fw-bold text-success">₡800</p>
        </div>
        <div class="card-footer text-center">
          <button class="btn btn-outline-success btn-sm">Añadir al Carrito 🛒</button>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<footer class="footer">
        <p>&copy; 2024 La Reina S.A Todos los derechos reservados.</p>
    </footer>
</body>
</html>
