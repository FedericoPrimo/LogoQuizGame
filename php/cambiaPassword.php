<?php
    require_once 'connessione.php';

    session_start();
    $username = $_SESSION['username'];

    $data = json_decode(file_get_contents('php://input'), true);

    $oldPsw = $data['oldPsw'];
    $newPsw = $data['newPsw'];

    $conn = connettitiAlDatabase();

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