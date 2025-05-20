
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos-Admin</title>
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
<div class="container mt-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Productos disponibles</h2>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAgregar">Agregar Producto</button>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4">

    <div class="col">
      <div class="card h-100">
        <img src="https://content.cuerpomente.com/medio/2021/11/17/maceta-con-orquidea-en-un-alfeizar_9512f96a_1200x1200.jpg" class="card-img-top" alt="Orquidea">
        <div class="card-body">
          <h5 class="card-title">Mini Orquidea</h5>
          <p class="card-text">Tipo: ornamnetal, poca agua y sol.</p>
          <p class="fw-bold text-success">₡6.500</p>
        </div>
        <div class="card-footer d-flex justify-content-between">
          <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</button>
          <button class="btn btn-danger btn-sm">Eliminar</button>
        </div>
      </div>
    </div>

    <div class="col">
      <div class="card h-100">
        <img src="https://estag.fimagenes.com/img/4/2/j/H/v/2jHv_900.jpg" class="card-img-top" alt="Lantanas">
        <div class="card-body">
          <h5 class="card-title">Lantanas</h5>
          <p class="card-text">Tipo: ornamental de sol.</p>
          <p class="fw-bold text-success">₡800</p>
        </div>
        <div class="card-footer d-flex justify-content-between">
          <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</button>
          <button class="btn btn-danger btn-sm">Eliminar</button>
        </div>
      </div>
    </div>


  </div>
</div>

<div class="modal fade" id="modalAgregar" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title">Agregar Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="text" class="form-control mb-3" placeholder="Nombre del producto" required>
          <textarea class="form-control mb-3" placeholder="Descripción" required></textarea>
          <input type="number" class="form-control mb-3" placeholder="Precio (₡)" required>
          <input type="text" class="form-control mb-3" placeholder="URL de la imagen" required>
        </div>
        <div class="modal-footer">
          <button class="btn btn-success">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modalEditar" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title">Editar Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <input type="text" class="form-control mb-3" value="Tomate Orgánico" required>
          <textarea class="form-control mb-3">Cultivado sin químicos</textarea>
          <input type="number" class="form-control mb-3" value="1500" required>
          <input type="text" class="form-control mb-3" value="URL actual de la imagen" required>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary">Actualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<footer class="footer">
        <p>&copy; 2024 La Reina S.A Todos los derechos reservados.</p>
    </footer>
</body>
</html>