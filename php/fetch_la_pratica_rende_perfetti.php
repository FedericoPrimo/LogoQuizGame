<?php

    require_once 'connessione.php';

    $conn = connettitiAlDatabase();

    $sql = "SELECT * FROM `classifica_la_pratica_rende_perfetti` ORDER BY `punti` DESC";
    $result = mysqli_query($conn, $sql);

?>