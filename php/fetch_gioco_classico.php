<?php
    require_once 'connessione.php';

    $conn = connettitiAlDatabase();

    $sql = "SELECT * FROM `classifica_gioco_classico` ORDER BY `classifica_gioco_classico`.`punti` DESC";
    $result = mysqli_query($conn, $sql);

?>