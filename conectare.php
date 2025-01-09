<?php
// Configurare baza de date
$host = "localhost";
$dbUsername = "root"; // XAMPP username
$dbPassword = ""; // XAMPP password
$dbName = "formular"; // Numele bazei de date

// Conectare baza de date
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Verificarea conexiunii
if ($conn->connect_error) {
    die("Conectarea a esuat: " . $conn->connect_error);
}
?>
