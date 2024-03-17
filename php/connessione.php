<?php
// Definisci i parametri di connessione al database
$db_host = "localhost"; // Nome host del server MySQL
$db_username = "root"; // Nome utente del database
$db_password = ""; // Password del database
$db_name = "calzolari_643496"; // Nome del database

// Crea la connessione al database
$conn = new mysqli($db_host, $db_username, NULL,  $db_name);

// Controlla se la connessione è fallita
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
    echo "Connessione fallita!";
}
else{
}

?>