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

    // Handle response
    req.onload = function() {
        if (req.status === 200) {
            const response = JSON.parse(req.responseText);

            if(response.message == "successo"){
                console.log("Registrato con successo");
                alert("Registrazione effettuata!\nLoggati per accedere");
            } else{
                errore = response.error;
                console.error(errore);

                // Devo vedere se l'email è duplicata o username già esistente
                errore = errore.indexOf("email_unica");
                if(errore == -1){
                    alert("Username già esistente");
                } else {
                    alert("Ti sei già registrato con questa email");
                }

            }
        }
    };

    // Send data
    req.send(JSON.stringify(data));

});