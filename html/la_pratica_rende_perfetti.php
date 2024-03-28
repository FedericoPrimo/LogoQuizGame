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
    	<link rel="stylesheet" href="../css/gioco.css" type="text/css" media="screen">
    </head>
    <body>
        <div>
            <h1>La pratica rende perfetti</h1>
        </div>
        <div class="container" id="container">
            <div class="punteggio">
                <div id="grid-punteggio">
                    <h2>Punteggio attuale</h2>
                    <div id="punteggio_attuale">
                        0
                    </div>
                </div>
                <a id ="torna_indietro" href="#">Fine partita</a>
            </div>
            <div class="main" id="main">
                <img id= "logo" alt="logo_corrente" src="../img/mcdonalds_2.png">
                <input id="risposta" type="text" name="risposta">
                <div id="esito"></div>
                <div id="parola">
                    <table>
                        <tbody>
                            <tr id="caselle">
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="classifica">
                <table>
                    <caption>Classifica</caption>
                    <tbody>
                        <tr>
                            <th>Nome</th>
                            <th>Punti</th>
                            <th>🥇</th>
                        </tr>
                        <?php
                            // Devo riempire la classifica
                            require_once "../php/fetch_la_pratica_rende_perfetti.php";

                            for($i = 1; $i <= 10; $i++) {
                                $row = $result->fetch_assoc();
                                echo "<tr><td>" . $row["username"] . "</td><td>" . $row["punti"] . "</td><td>" . $i . "</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div id="risultati" class="risultati">
            <div>
                <h2>Hai sbagliato!</h2>
                <p>Punteggio finale:</p>
                <div id="risultatofinale"></div> 
            </div>
        </div>
        <script src="../js/gioco.js"></script>
    </body>
</html>