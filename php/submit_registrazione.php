<?php
    require_once 'connessione.php';

    $regexusr = "/[A-Za-z0-9_]{4,20}/";
    $regexnomecognome = "/[A-Za-z' ]{2,20}/";
    $regexpsw = "/[A-Za-z0-9@$!']{4,20}/";

    // Prelevo i dati
    $data = json_decode(file_get_contents('php://input'), true);

    $username = $data['username'];
    $nome = $data['nome'];
    $cognome = $data['cognome'];    
    $email = $data['email'];
    $password = $data['password'];

    if(!preg_match($regexusr, $username)){
        echo json_encode(['error' => "L'username accetta solo lettere, numeri, il carattere _ e deve essere compreso tra i 4 e i 20 caratteri"]);
        die();
    }
    if(!preg_match($regexnomecognome, $nome)){
        echo json_encode(['error' => 'Il nome accetta solo lettere e deve essere compreso tra i 4 e i 20 caratteri.']);
        die();
    } 
    if(!preg_match($regexnomecognome, $cognome)){
        echo json_encode(['error' => 'Il cognome accetta solo lettere e deve essere compreso tra i 4 e i 20 caratteri.']);
        die();
    }
    if(!preg_match($regexpsw, $password)){
        echo json_encode(['error' => 'La password accetta solo numeri, lettere, i caratteri @$! e deve essere compresa tra i 4 e i 20 caratteri']);
        die();
    }  
    
    // Devo salvare l'hash della password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $conn = connettitiAlDatabase();
    
    // Devo inserire nella tabella utenti
    $sql = "INSERT INTO `utenti`(`username`, `nome`, `cognome`, `email`, `password`) VALUES (?,?,?,?,?)";
    if($statement = mysqli_prepare($conn, $sql)){
        mysqli_stmt_bind_param($statement, 'sssss', $username, $nome, $cognome, $email, $password);

        mysqli_stmt_execute($statement);
        $result = mysqli_stmt_get_result($statement);
    }
    
    // Controllo se è andato a buon fine
    if ($result === TRUE) {
        echo json_encode(['message' => 'successo']);
    } else {
        // Sei già registrato, o email duplicata o username duplicato
        echo json_encode(['error' => $conn->error]);
    }
    mysqli_close($conn);
    
    
    ?>
