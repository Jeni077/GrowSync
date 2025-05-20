<?php
    session_start(); 
    $isLoggedIn = isset($_SESSION['usuario']);
    $clienteID = 101;
$pedidos = [
    ['numero' => 1, 'fecha' => '2025-04-12 10:00', 'estado' => 'En preparación', 'total' => 2500],
    ['numero' => 2, 'fecha' => '2025-04-10 14:30', 'estado' => 'Listo para retiro', 'total' => 1200]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Automatizacion de Usuario</title>
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
                       
                            <a class="btn btn-light mx-2" href="../ingresar.php">Cerrar Sesión</a>
                       
                           
                    </div>
                </div>
            </div>
        </nav>
    </header>
   
<h2>Mis Pedidos</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>N° Pedido</th>
        <th>Fecha y Hora</th>
        <th>Estado</th>
        <th>Total</th>
        <th>Acciones</th>
    </tr>
    <?php foreach ($pedidos as $pedido): ?>
        <tr>
            <td><?= $pedido['numero'] ?></td>
            <td><?= $pedido['fecha'] ?></td>
            <td><?= $pedido['estado'] ?></td>
            <td>₡<?= number_format($pedido['total'], 2) ?></td>
            <td>
                <?php if ($pedido['estado'] === 'Listo para retiro'): ?>
                    <button onclick="alert('¡Su pedido está listo!')">Ver Notificación</button>
                <?php endif; ?>
                <button>Repetir Pedido</button>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<footer class="footer">
        <p>&copy; 2024 La Reina S.A Todos los derechos reservados.</p>
    </footer>
</body>
</html>