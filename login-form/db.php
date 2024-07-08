<?php
$servername = "127.0.0.1";
$username = "root";
$password = "@Macabro5072001";
$dbname = "tienda_sistemas";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
