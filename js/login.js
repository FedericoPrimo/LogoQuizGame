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

// Vado ad effettuare la richiesta di login
document.getElementById("login").addEventListener("submit", function(event){
    event.preventDefault();

    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    const req = new XMLHttpRequest();
    req.open("POST", "../php/submit_login.php", true);
    req.setRequestHeader('Content-Type', 'application/json');

    const data = {
        email: email,
        password: password
    };

    req.onload = function() {
        if (req.status === 200) {
            const response = JSON.parse(req.responseText);
            if(response.message == "successo"){
                console.log("Loggato con successo e sessione creata");
                location.href = "../html/home.php";
            } else{
                confirm("Credenziali non corrette, riprova");
            }
        }
    };

    req.send(JSON.stringify(data));

});