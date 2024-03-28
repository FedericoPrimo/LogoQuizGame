<?php
    require_once 'connessione.php';

    session_start();

    // Prelevo i dati
    $data = json_decode(file_get_contents('php://input'), true);

    $conn = connettitiAlDatabase();

    $username = $_SESSION['username'];
    $modalità = $data['modalità'];

    // Guardo in quale tabella salvare i punteggi
    switch ($modalità){
        case "/html/gioco.php":
            $modalità = "classifica_gioco_classico";
            break;
        case "/html/prova_a_tempo.php":
            $modalità = "classifica_prova_a_tempo";
            break;
        case "/html/la_pratica_rende_perfetti.php":
            $modalità = "classifica_la_pratica_rende_perfetti";
            break;
    }

    $sql = "SELECT * FROM `$modalità` WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    $punteggio = $data['punteggio'];

    // Devo salvare solo se il punteggio è il migliore che abbia mai fatto
    if (mysqli_num_rows($result) == 0) {
        $sql = "INSERT INTO `$modalità` (`username`, `punti`) VALUES ('$username', '$punteggio')";
        mysqli_query($conn, $sql);
        echo "primo punteggio";
        die();
    }

    $row = mysqli_fetch_assoc($result);
    if($row['punti'] < $punteggio){
        $sql = "UPDATE `$modalità` SET `punti` = '$punteggio' WHERE `username` = '$username'";
        mysqli_query($conn, $sql);
        echo "salvo";

    } else {
        echo "non salvo";
    }


?>