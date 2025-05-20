<?php
session_start();

// Obtener los datos del formulario
$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Validar usuario y contraseña (puedes colocar valores fijos como ejemplo)
if ($usuario == 'admin' && $password == '12345') {
    $_SESSION['usuario'] = $usuario;  // Guardar en la sesión
    header('Location: index.php');     // Redirigir al index.php
    exit();
} else {
    echo "Credenciales incorrectas. Intenta nuevamente.";
    // Puedes agregar un enlace para volver a intentar login
    echo '<br><a href="ingresar.php">Volver al login</a>';
}
?>
