document.getElementById("logout").addEventListener("click", function(event){
    event.preventDefault();
    if(confirm("Sei sicuro di voler fare logout?")){
        let x = new XMLHttpRequest();
        x.open("POST", "../php/chiudiSessione.php", true);
        x.onload = function(){
            console.log(x.responseText);
            window.location.replace("../html/login.html");
        }
        x.send();
    }
});