document.getElementById("cambiaPassword").addEventListener("click", function(){
    document.getElementById("container-dati").style.display = "none";
    document.getElementById("popup").style.display = "grid";
});

document.getElementById("indietro").addEventListener("click", function(){
    document.getElementById("container-dati").style.display = "grid";
    document.getElementById("popup").style.display = "none";
});

document.getElementById("cambioPassword").addEventListener("submit", function(event){
    event.preventDefault();
    const oldPsw = document.getElementById("oldPsw").value;
    const newPsw = document.getElementById("newPsw").value;
    const repeatPsw = document.getElementById("repeatPsw").value;
    if(newPsw != repeatPsw){
        alert("Le password non combaciano!");
        return;
    }

    // Preparo i dati da mandare
    const data = {
        oldPsw: oldPsw,
        newPsw: newPsw 
    }
    // Devo controllare se ha messo la vecchia password giusta
    const req = new XMLHttpRequest();
    req.open("POST", "../php/cambiaPassword.php");
    req.onload = function(){
        let risposta = JSON.parse(req.responseText);
        if(risposta.message == "Password aggiornata correttamente"){
            alert(risposta.message);
        }else{
            alert(risposta.error);
        }
        document.getElementById("oldPsw").value = "";
        document.getElementById("newPsw").value = "";
        document.getElementById("repeatPsw").value = "";
    }
    req.send(JSON.stringify(data));
})