<?php
    // Evito che l'utente possa entrare nel sito da sloggato
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../html/login.html");
    }
?>
<!DOCTYPE html>
<html lang="it-it">
    <head>
        <meta charset="utf-8"> 
		<link rel="shortcut icon" type="image/x-icon" href="../icon/logo.png">
    	<title>Indovina il logo!</title>
    	<link rel="stylesheet" href="../css/home.css" type="text/css" media="screen">
    </head>
    <body>
        <h1>Benvenuto <?php echo $_SESSION['nome'] ?> in indovina il logo</h1>
        <div class="flex-navbar">
            <div class="navbar-item"><a href="profilo.php" >Profilo</a></div>
            <div class="navbar-item"><a href="risultati.php" >I miei risultati</a></div>
            <div class="navbar-item"><a href="regole-sito.php" >Come funziona il sito?</a></div>
            <div class="navbar-item"><a href="login.html" id ="logout">Logout</a></div>
        </div>
        <div class="grid-container">
            <div id="primo-gioco" class="container-item"><a href="prova_a_tempo.php" >Prova a tempo</a></div>
            <div id="secondo-gioco" class="container-item"><a href="gioco.php">Gioco classico</a></div>
            <div id="terzo-gioco" class="container-item"><a href="la_pratica_rende_perfetti.php" >La pratica rende perfetti</a></div>
        </div>
        <script src="../js/home.js"></script>
    </body>
</html>