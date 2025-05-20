<?php
    session_start(); 
    $isLoggedIn = isset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Automatizacion de Pedidos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class>
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
                       
                            <a class="btn btn-light mx-2" href="../ingresar.php">Cerrar Sesión</a>
                       
                           
                    </div>
                </div>
            </div>
        </nav>
    </header>
   

    <div class="container my-5">
    <h1 class="text-center mb-4">Panel de Pedidos</h1>

    <!-- Filtro de Fechas -->
    <form method="GET" class="row g-3 mb-4">
        <div class="col-md-4">
            <label for="fecha_inicio" class="form-label">Desde:</label>
            <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control"
                   value="<?php echo $_GET['fecha_inicio'] ?? ''; ?>">
        </div>
        <div class="col-md-4">
            <label for="fecha_fin" class="form-label">Hasta:</label>
            <input type="date" name="fecha_fin" id="fecha_fin" class="form-control"
                   value="<?php echo $_GET['fecha_fin'] ?? ''; ?>">
        </div>
        <div class="col-md-4 d-flex align-items-end">
            <button type="submit" class="btn btn-primary w-100">Filtrar</button>
        </div>
    </form>

    <!-- Tabla de Pedidos -->
    <div class="table-wrapper">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>N° Pedido</th>
                    <th>Fecha y Hora</th>
                    <th>ID Cliente</th>
                    <th>Estado</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Simulación de datos
                $pedidos = [
                    ['id' => 101, 'fecha' => '2025-04-12 10:00', 'cliente' => 1, 'estado' => 'Pendiente', 'total' => 25000],
                    ['id' => 102, 'fecha' => '2025-04-11 15:30', 'cliente' => 2, 'estado' => 'En proceso', 'total' => 18000],
                    ['id' => 103, 'fecha' => '2025-04-10 08:45', 'cliente' => 3, 'estado' => 'Entregado', 'total' => 30000]
                ];

                $fecha_inicio = $_GET['fecha_inicio'] ?? null;
                $fecha_fin = $_GET['fecha_fin'] ?? null;

                foreach ($pedidos as $pedido) {
                    $mostrar = true;

                    if ($fecha_inicio && strtotime($pedido['fecha']) < strtotime($fecha_inicio)) {
                        $mostrar = false;
                    }
                    if ($fecha_fin && strtotime($pedido['fecha']) > strtotime($fecha_fin . ' 23:59:59')) {
                        $mostrar = false;
                    }

                    if ($mostrar) {
                        echo "<tr>
                                <td>{$pedido['id']}</td>
                                <td>{$pedido['fecha']}</td>
                                <td>{$pedido['cliente']}</td>
                                <td>
                                    <form method='POST' action='cambiar_estado.php' class='d-flex'>
                                        <input type='hidden' name='pedido_id' value='{$pedido['id']}'>
                                        <select name='nuevo_estado' class='form-select form-select-sm me-2'>
                                            <option value='Pendiente' " . ($pedido['estado'] == 'Pendiente' ? 'selected' : '') . ">Pendiente</option>
                                            <option value='En proceso' " . ($pedido['estado'] == 'En proceso' ? 'selected' : '') . ">En proceso</option>
                                            <option value='Entregado' " . ($pedido['estado'] == 'Entregado' ? 'selected' : '') . ">Entregado</option>
                                        </select>
                                        <button type='submit' class='btn btn-sm btn-outline-success'>Guardar</button>
                                    </form>
                                </td>
                                <td>₡" . number_format($pedido['total'], 2) . "</td>
                                <td>
                                    <a href='ver_pedido.php?id={$pedido['id']}' class='btn btn-sm btn-primary'>Ver</a>
                                    <a href='procesar_pedido.php?id={$pedido['id']}' class='btn btn-sm btn-success'>Procesar</a>
                                    <a href='cancelar_pedido.php?id={$pedido['id']}' class='btn btn-sm btn-danger'>Cancelar</a>
                                </td>
                            </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

    <div class="text-end">
        <a href="nuevo_pedido.php" class="btn btn-success mt-3">+ Nuevo Pedido</a>
    </div>
    <footer class="footer">
        <p>&copy; 2024 La Reina S.A Todos los derechos reservados.</p>
    </footer>
</body>

</html>