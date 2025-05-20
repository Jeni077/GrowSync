<?php
$serverName = "localhost"; // o "localhost\\SQLEXPRESS"
$connectionOptions = [
    "Database" => "viverodb",
    "TrustServerCertificate" => true
];

$conn = sqlsrv_connect($serverName, $connectionOptions);

if ($conn === false) {
    die("Conexión fallida: " . print_r(sqlsrv_errors(), true));
} else {
    echo " Conexión exitosa a la base de datos. sql";
}
?>
