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
    	<link rel="stylesheet" href="../css/regole-sito.css" type="text/css" media="screen">
    </head>
    <body>
        <h1>Regole</h1>
        <div class="flex-navbar">
            <div class="navbar-item"><a href="home.php" >Torna indietro</a></div>
            <div class="navbar-item"><a href="regole.php" >Come funziona il gioco?</a></div>
        </div>
        <div class="flex-RegoleSito">
            <div class="container-item">
                <h2>Il sito in generale</h2>
                <p>
                    Il sito è composto da una parte iniziale dove l'utente può loggarsi o registrarsi.
                    Una volta loggato si giunge alla propria home personale dove è possibile scegliere una modalità di gioco,
                    andare a controllare i dati del proprio profilo oppure la propria posizione nelle varie classifiche.
                    <br>
                    I punteggi sono salvati alla fine della partita e i 10 migliori giocatori per modalità saranno messi
                    nella classifica a lato con i loro punteggi a fianco.
                </p>
            </div>
            <div class="container-item">
                <h2>Fine partita</h2>
                <p>
                    Le partite non possono essere salvate e riprese, se si desidera finire una partita basterà
                    premere il tasto "Fine partita" o perdere volontariamente. Verrà mostrata una schermata riepilogativa
                    e i punteggi saranno salvati nel server.
                </p>
            </div>
        </div>
    </body>
</html>