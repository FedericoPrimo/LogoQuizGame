<?php

    require_once 'connessione.php';

    $conn = connettitiAlDatabase();

    $sql = "SELECT * FROM `classifica_prova_a_tempo` ORDER BY `punti` DESC";
    $result = mysqli_query($conn, $sql);

?>