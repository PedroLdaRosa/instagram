<?php
$servername = "10.2.156.96";
$username = "fema";
$password = "fema123";
$dbname = "fema_instagram";
// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);
// Validar conexão
if ($conn->connect_error) {
 die("Falha na conexão: " . $conn->connect_error);
}
echo "Conectado";
?>