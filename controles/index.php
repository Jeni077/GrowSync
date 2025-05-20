<?php
    session_start(); 
    $isLoggedIn = isset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Controles de pedidos y finanzas </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

    <main>
   
<div class="container py-5">
  <h2 class="mb-4">📊 Panel de Finanzas y Control de Pedidos</h2>

  <!-- Botones de exportación -->
  <div class="mb-3">
    <button class="btn btn-outline-primary">Exportar CSV</button>
    <button class="btn btn-outline-success">Exportar Excel</button>
    <button class="btn btn-outline-danger">Exportar PDF</button>
  </div>

  <!-- Tabla de pedidos -->
  <div class="table-responsive bg-white shadow rounded p-3">
    <h4 class="mb-3">📦 Historial de Pedidos</h4>
    <table class="table table-bordered table-hover align-middle text-center">
      <thead class="table-dark">
        <tr>
          <th>N° Pedido</th>
          <th>Fecha y Hora</th>
          <th>ID Cliente</th>
          <th>Estado</th>
          <th>Total</th>
          <!--   <th>Acciones</th>-->
        </tr>
      </thead>
      <tbody>
        <!-- Ejemplo de fila (datos de prueba) -->
        <tr>
          <td>1001</td>
          <td>2025-04-11 10:32</td>
          <td>CL123</td>
          <td><span class="badge bg-warning text-dark">Pendiente</span></td>
          <td>₡12,500.00</td>
        <!--    <td>
            <button class="btn btn-sm btn-info">Ver</button>
            <button class="btn btn-sm btn-danger">Cancelar</button>
          </td>
        </tr>-->
        <!-- Más filas aquí con PHP -->
      </tbody>
    </table>
  </div>

  <!-- Resumen Financiero -->
  <div class="card mt-4 shadow-sm">
    <div class="card-body">
      <h4 class="card-title">💰 Resumen Financiero</h4>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Total de ventas completadas: <strong>₡100,000.00</strong></li>
        <li class="list-group-item">Total de pedidos: <strong>10</strong></li>
        <li class="list-group-item">Pedidos en progreso: <strong>3</strong></li>
        <li class="list-group-item">Pedidos cancelados: <strong>2</strong></li>
      </ul>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    </main>

    <br>
    <br>

    <footer class="footer">
        <p>&copy; 2024 La Reina S.A Todos los derechos reservados.</p>
    </footer>

   

</body>
</html>





