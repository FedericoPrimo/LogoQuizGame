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
    	<link rel="stylesheet" href="../css/regole.css" type="text/css" media="screen">
    </head>
    <body>
        <h1>Regole</h1>
        <div class="flex-navbar">
            <div class="navbar-item"><a href="home.php" >Torna indietro</a></div>
            <div class="navbar-item"><a href="regole-sito.php" >Come funziona il sito?</a></div>
        </div>
        <div class="container-regole">
            <div class="flex-regoleGenerali">
                <div class="container-item">
                    <h2>Regole del gioco</h2>
                    <p>
                        Lo scopo del gioco è quello di indovinare il nome di più loghi possibili, ma attenzione che non sarà semplice.
                        I loghi infatti saranno coperti per non rendere il tutto banale e verrà testata la vostra abilità nel saper ricordare
                        i loghi delle più famose marche in giro per il mondo!
                    </p>
                </div>
                <div class="container-item">
                    <h2>Gioco classico</h2>
                    <p>
                        Il classico gioco senza nessuna regola aggiuntiva. Ogni risposta esatta fa guadagnare un punto,
                        ma ogni risposta errata ne fa perdere uno
                    </p>
                </div>
            </div>
            <div class="grid-container">
                <div class="container-item">
                    <h2>Prova a tempo</h2>
                    <p>
                        Mettiti alla prova sfidando il tempo! Avrai 1m di tempo per indovinare più loghi possibili, che vinca il più veloce!
                    </p>    
                </div>
                <div class="container-item">
                    <h2>La pratica rende perfetti</h2>
                    <p>
                        Hai solo una vita, al primo errore la partita termina e dovrai rincominciare da capo
                    </p> 
                </div>
            </div>
        </div>
    </body>
</html>