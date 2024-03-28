// Controllo se il server di back-end è online
document.addEventListener("DOMContentLoaded", function(){
    const req = new XMLHttpRequest();
    req.open("POST", "../php/connessione.php");
    
    req.onload = function(){
        if(req.status == 200){
            console.log("Connessione al database riuscita");
        }
        else{
            alert("Servizio non disponibile, riprova più tardi!");
        }
    }

    req.send();
});

// Gestisco la richiesta di registrazione
document.getElementById("registrazione").addEventListener("submit", function(event){
    event.preventDefault();

    const username = document.getElementById("username").value;
    const nome = document.getElementById("nome").value;
    const cognome = document.getElementById("cognome").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    const req = new XMLHttpRequest();
    req.open("POST", "../php/submit_registrazione.php");
    req.setRequestHeader('Content-Type', 'application/json');

    const data = {
        username: username,
        nome: nome,
        cognome: cognome,
        email: email,
        password: password
    };

    req.onload = function() {
        if (req.status === 200) {
            const response = JSON.parse(req.responseText);

            if(response.message == "successo"){
                console.log("Registrato con successo");
                confirm("Registrazione effettuata!\nLoggati per accedere");
            } else{
                errore = response.error;

                // Devo vedere se l'email è duplicata o username già esistente
                let duplicateEmail = errore.indexOf("email_unica");
                let duplicateUsr = errore.indexOf("PRIMARY");
                if(duplicateEmail != -1){
                    // Nella stringa è presente "email_unica", quindi già email già presente
                    confirm("Ti sei già registrato con questa email");
                } else if(duplicateUsr != -1){
                    // Nella stringa è presente "PRIMARY", quindi già username già presente
                    confirm("Username già scelto da un altro utente");
                } else {
                    // Altri errori
                    confirm(response.error);
                }

            }
        }
    };

    req.send(JSON.stringify(data));

});