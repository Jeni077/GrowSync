<?php
session_start();
session_destroy();  // Elimina todos los datos de la sesión
header('Location: ingresar.php');  // Redirige al login
exit();
?>
