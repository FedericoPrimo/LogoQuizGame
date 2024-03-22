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
    	<link rel="stylesheet" href="../css/profilo.css" type="text/css" media="screen">
    </head>
    <body>
        <h1>Pagina del profilo</h1>
        <div class="flex-navbar">
            <div class="navbar-item"><a href="home.php" >Torna indietro</a></div>
            <div class="navbar-item"><a href="regole-sito.php" >Come funziona il sito?</a></div>
        </div>
        <div id ="container-dati" class="container-dati">
            <h2>Dati personali</h2>
            <div>
                <div>Username: <?php echo $_SESSION['username']?></div>
                <div>Email: <?php echo $_SESSION['email']?></div>
                <div>Nome: <?php echo $_SESSION['nome']?></div>
                <div>Cognome: <?php echo $_SESSION['cognome']?></div>
                <div>Password: ****** <button id="cambiaPassword">Cambia Password</button></div>
            </div>
        </div>
        <div id="popup" class="popup">
            <h2>Cambia password</h2>
            <form id="cambioPassword">
                <label class="item1" for="oldPsw">Vecchia password:<input type="password" id="oldPsw" name="oldPsw" required></label>
                <label class="item2" for="newPsw">Nuova password:<input type="password" id="newPsw" name="newPsw" required></label>
                <label class="item3"for="repeatPsw">Ripeti nuova password:<input type="password" id="repeatPsw" name="repeatPsw" required></label>
                <input type="submit" value="Cambia password">
                <button id="indietro" type="submit">Indietro</button>
            </form>
        </div>
        <script src="../js/profilo.js"></script>
    </body>
</html>