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
    	<link rel="stylesheet" href="../css/risultati.css" type="text/css" media="screen">
    </head>
    <body>
        <h1>I miei risultati</h1>
        <div class="flex-navbar">
            <div class="navbar-item"><a href="home.php" >Torna indietro</a></div>
            <div class="navbar-item"><a href="regole.php" >Come funziona il gioco?</a></div>
        </div>
        <div class="grid-classifica">
            <div class="my-result">
                <table>
                    <caption>Risultato migliore<br><i>Prova a tempo</i></caption>
                    <tbody>
                        <tr>
                            <th>Nome</th>
                            <th>Punti</th>
                            <th>🥇</th>
                        </tr>
                        <?php
                            // Devo riempire la classifica
                            require "../php/fetch_prova_a_tempo.php";

                            for($i = 1; $i <= mysqli_num_rows($result); $i++) {
                                $row = mysqli_fetch_assoc($result);
                                if($row['username'] == $_SESSION['username']){
                                    echo "<tr><td>" . $row["username"] . "</td><td>" . $row["punti"] . "</td><td>" . $i . "</td></tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="my-result">
                <table>
                    <caption>Risultato migliore<br><i>Gioco classico</i></caption>
                    <tbody>
                        <tr>
                            <th>Nome</th>
                            <th>Punti</th>
                            <th>🥇</th>
                        </tr>
                        <?php
                            // Devo riempire la classifica
                            require "../php/fetch_gioco_classico.php";

                            for($i = 1; $i <= mysqli_num_rows($result); $i++) {
                                $row = mysqli_fetch_assoc($result);
                                if($row['username'] == $_SESSION['username']){
                                    echo "<tr><td>" . $row["username"] . "</td><td>" . $row["punti"] . "</td><td>" . $i . "</td></tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="my-result">
                <table>
                    <caption>Risultato migliore<br><i>La pratica rende perfetti</i></caption>
                    <tbody>
                        <tr>
                            <th>Nome</th>
                            <th>Punti</th>
                            <th>🥇</th>
                        </tr>
                        <?php
                            // Devo riempire la classifica
                            require "../php/fetch_la_pratica_rende_perfetti.php";

                            for($i = 1; $i <= mysqli_num_rows($result); $i++) {
                                $row = mysqli_fetch_assoc($result);
                                if($row['username'] == $_SESSION['username']){
                                    echo "<tr><td>" . $row["username"] . "</td><td>" . $row["punti"] . "</td><td>" . $i . "</td></tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="classifica">
                <table>
                    <caption>Classifica globale</caption>
                    <tbody>
                        <?php
                            // Devo riempire la classifica
                            require "../php/fetch_prova_a_tempo.php";

                            for($i = 1; $i <= 10; $i++) {
                                $row = mysqli_fetch_assoc($result);
                                echo "<tr><td>" . $row["username"] . "</td><td>" . $row["punti"] . "</td><td>" . $i . "</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="classifica">
                <table>
                    <caption>Classifica globale</caption>
                    <tbody>
                        <?php
                            // Devo riempire la classifica
                            require "../php/fetch_gioco_classico.php";

                            for($i = 1; $i <= 10; $i++) {
                                $row = mysqli_fetch_assoc($result);
                                echo "<tr><td>" . $row["username"] . "</td><td>" . $row["punti"] . "</td><td>" . $i . "</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div><div class="classifica">
                <table>
                    <caption>Classifica globale</caption>
                    <tbody>
                        <?php
                            // Devo riempire la classifica
                            require "../php/fetch_la_pratica_rende_perfetti.php";

                            for($i = 1; $i <= 10; $i++) {
                                $row = mysqli_fetch_assoc($result);
                                echo "<tr><td>" . $row["username"] . "</td><td>" . $row["punti"] . "</td><td>" . $i . "</td></tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>