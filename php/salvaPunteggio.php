<?php
    require_once 'config.php';

    session_start();

    // Prelevo i dati
    $data = json_decode(file_get_contents('php://input'), true);

    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD,  DB_NAME);
        
    // Controlla se la connessione è fallita
    if(mysqli_connect_errno()){
        die(mysqli_connect_error());
    }

    $username = $_SESSION['username'];
    $sql = "SELECT * FROM `classifica_gioco_classico` WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);

    $punteggio = $data['punteggio'];

    // Devo salvare solo se il punteggio è il migliore che abbia mai fatto
    if (mysqli_num_rows($result) == 0) {
        $sql = "INSERT INTO `classifica_gioco_classico` (`username`, `punti`) VALUES ('$username', '$punteggio')";
        mysqli_query($conn, $sql);
        echo "primo punteggio";
        die();
    }

    $row = mysqli_fetch_assoc($result);
    if($row['punti'] < $punteggio){
        $sql = "UPDATE `classifica_gioco_classico` SET `punti` = '$punteggio' WHERE `classifica_gioco_classico`.`username` = '$username'";
        mysqli_query($conn, $sql);
        echo "salvo";

    } else {
        echo "non salvo";
    }


?>