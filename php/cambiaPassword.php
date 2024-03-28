<?php
    require_once 'connessione.php';

    session_start();

    // Recupero i dati che mi servono
    $username = $_SESSION['username'];

    $data = json_decode(file_get_contents('php://input'), true);
    $oldPsw = $data['oldPsw'];
    $newPsw = $data['newPsw'];

    // Mi connetto al db ed eseguo la mia query
    $conn = connettitiAlDatabase();

    $sql = "SELECT * FROM utenti WHERE username = ?";
    if($statement = mysqli_prepare($conn, $sql)){
        mysqli_stmt_bind_param($statement, 's', $username);

        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
    } else {
        die();
    }

    $row = mysqli_fetch_assoc($result);

    if (!password_verify($oldPsw, $row['password'])) {
        echo json_encode(['error' => 'Password errata']);
        die();
    }

    // Devo fare l'hash della password da salvare
    $newPswHashed = password_hash($newPsw, PASSWORD_DEFAULT);

    $sql = "UPDATE `utenti` SET `password` = ? WHERE `utenti`.`username` = ?";
    if($statement = mysqli_prepare($conn, $sql)){
        mysqli_stmt_bind_param($statement, 'ss', $newPswHashed, $username);

        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
    } else {
        die();
    }

    echo json_encode(['message' => 'Password aggiornata correttamente']);

?>