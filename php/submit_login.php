<?php
    require_once 'connessione.php';

    // Prelevo i dati
    $data = json_decode(file_get_contents('php://input'), true);
    
    $email = $data['email'];
    $password = $data['password'];

    $conn = connettitiAlDatabase();

    $sql = "SELECT * FROM utenti WHERE email = ?";
    if($statement = mysqli_prepare($conn, $sql)){
        mysqli_stmt_bind_param($statement, 's', $email);

        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
    } else {
        die();
    }
    
    if (mysqli_num_rows($result) == 0) {
        echo json_encode(['error' => 'Credenziali errate']);
        die();
    }
    
    // Controllo della password
    $row = mysqli_fetch_assoc($result);
    $hashedPassword = $row['password'];

    if (!password_verify($password, $hashedPassword)) {
        echo json_encode(['error' => 'Password errata']);
        die();
    }

    // Creo la sessione
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['cognome'] = $row['cognome'];
    $_SESSION['email'] = $email;
    
    echo json_encode(['message' => 'successo']);
    
    mysqli_close($conn);
    
    ?>
