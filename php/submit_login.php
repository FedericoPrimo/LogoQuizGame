<?php
    
    require_once 'config.php';
    // Prelevo i dati
    $data = json_decode(file_get_contents('php://input'), true);
    
    $email = $data['email'];
    $password = $data['password'];

    // Crea la connessione al database
    $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD,  DB_NAME);
        
    // Controlla se la connessione è fallita
    if(mysqli_connect_errno()){
        die(mysqli_connect_error());
    }

    $sql = "SELECT * FROM utenti WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    
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
    require_once "iniziaSessione.php";
    $_SESSION['username'] = $row['username'];
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['cognome'] = $row['cognome'];
    $_SESSION['email'] = $email;
    
    echo json_encode(['message' => 'successo']);
    
    mysqli_close($conn);
    
    ?>
