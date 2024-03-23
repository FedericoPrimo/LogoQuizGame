<?php
    require_once 'connessione.php';

    // Prelevo i dati
    $data = json_decode(file_get_contents('php://input'), true);

    $username = $data['username'];
    $nome = $data['nome'];
    $cognome = $data['cognome'];    
    $email = $data['email'];
    $password = $data['password'];

    // Devo salvare l'hash della password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $conn = connettitiAlDatabase();

    // Devo inserire nella tabella utenti
    $sql = "INSERT INTO `utenti`(`username`, `nome`, `cognome`, `email`, `password`) VALUES ('$username','$nome','$cognome','$email','$password')";
    $result = mysqli_query($conn, $sql);
    
    // Controllo se è andato a buon fine
    if ($result === TRUE) {
        echo json_encode(['message' => 'successo']);
    } else {
        // Sei già registrato, o email duplicata o username duplicato
        echo json_encode(['error' => $conn->error]);
    }

    mysqli_close($conn);
    
    ?>
