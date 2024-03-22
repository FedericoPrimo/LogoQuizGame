<?php
    require_once 'config.php';
    session_start();
    $username = "f.calzolari1"; //$_SESSION['username'];

    $data = json_decode(file_get_contents('php://input'), true);

    $oldPsw = $data['oldPsw'];
    $newPsw = $data['newPsw'];

    // Crea la connessione al database
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD,  DB_NAME);
        
    // Controlla se la connessione è fallita
    if(mysqli_connect_errno()){
        die(mysqli_connect_error());
    }

    $sql = "SELECT * FROM utenti WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (!password_verify($oldPsw, $row['password'])) {
        echo json_encode(['error' => 'Password errata']);
        die();
    }

    // Devo fare l'hash della password da salvare
    $newPswHashed = password_hash($newPsw, PASSWORD_DEFAULT);

    $sql = "UPDATE `utenti` SET `password` = '$newPswHashed' WHERE `utenti`.`username` = '$username'";
    $result = mysqli_query($conn, $sql);

    echo json_encode(['message' => 'Password aggiornata correttamente']);

?>