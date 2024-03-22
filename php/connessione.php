<?php
require_once "config.php";

function connettitiAlDatabase(){
    
    // Crea la connessione al database
    $connessione = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD,  DB_NAME);
        
    // Controlla se la connessione è fallita
    if(mysqli_connect_errno()){
        die(mysqli_connect_error());
    }
        
    return $connessione;
}

?>