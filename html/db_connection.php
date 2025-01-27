<?php
$servername = "swarm_mysql";
$username = "frodo";  // Cambia "tu_usuario" por tu nombre de usuario real
$password = "bolson";  // Cambia "tu_contraseña" por tu contraseña real
$dbname = "dbmalaga";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>