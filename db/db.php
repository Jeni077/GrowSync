<?php
$host = "localhost";
$user = "root";
$pass = "123456c";
$db = "viverodb";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Se logró conectar a la base de datos.";
}
?>

