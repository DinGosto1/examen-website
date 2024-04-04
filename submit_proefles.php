<?php
include 'db_connect.php';

// Ontvangen formuliergegevens
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$day = $_POST['day'];
$time = $_POST['time'];
$message = $_POST['message'];

// SQL-query voor het invoegen van de gegevens in de database
$sql = "INSERT INTO proeflessen (name, email, phone, day, time, message) VALUES ('$name', '$email', '$phone','$day', '$time','$message')";

// Uitvoeren van de query
if ($conn->query($sql) === TRUE) {
    echo "Bedankt! Uw proeflesaanmelding is ontvangen.";
} else {
    echo "Fout bij het verwerken van uw aanmelding: " . $conn->error;
}

// Sluit de databaseverbinding
$conn->close();
?>
