<?php

    require_once 'config.php';

    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD,  DB_NAME);
        
    // Controlla se la connessione è fallita
    if(mysqli_connect_errno()){
        die(mysqli_connect_error());
    }

    $sql = "SELECT * FROM `classifica_gioco_classico` ORDER BY `classifica_gioco_classico`.`punti` DESC";
    $result = mysqli_query($conn, $sql);

?>