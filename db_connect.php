<?php
// Database parameters
$host = "localhost"; // Hostnaam (meestal 'localhost')
$user = "root"; // Gebruikersnaam voor de database
$password = ""; // Wachtwoord voor de database
$database = "rijschool website"; // Naam van de database

// Maak verbinding met de database
$conn = new mysqli($host, $user, $password, $database);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Kan geen verbinding maken met de database: " . $conn->connect_error);
} else {
    echo "Verbinding met de database tot stand gebracht.";
}
?>
