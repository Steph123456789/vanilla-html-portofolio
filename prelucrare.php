<?php
// Includerea fisierului de conectare
include_once 'conectare.php';

// Verifica daca formularul este trimis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Preluare informatie din formular
    $nume = $conn->real_escape_string($_POST['nume']);
    $email = $conn->real_escape_string($_POST['email']);
    $telefon = $conn->real_escape_string($_POST['telefon']);
    $mesaj = $conn->real_escape_string($_POST['mesaj']);



    // Insereaza datele in baza de date
    $sql = "INSERT INTO contact (nume, email, telefon, mesaj) VALUES (?, ?, ?, ?)";

    // Pregateste instructiunea
    $stmt = $conn->prepare($sql);
    
    // legarea parametrilor de instrucțiunea pregătită
    $stmt->bind_param("ssis", $nume, $email, $telefon, $mesaj);

    // Executa instructiunea
    if ($stmt->execute()) {
        echo "Mesajul tau a fost trimis!!";
    } else {
        echo "Erroare: " . $stmt->error;
    }

    // Inchidere instructiune
    $stmt->close();
}

// Inchide conectarea la baza de date
$conn->close();
?>
