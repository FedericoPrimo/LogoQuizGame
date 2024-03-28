// Array contenente tutti i nomi dei loghi
let fileImmagini = ['absolut_2.png', 'acura_2.png', 'adidas_2.png', 'adio_2.png', 'adobe_2.png', 'aero_4.png', 'airwalk_1.png', 'aiwa_3.png', 'alibaba_4.png', 'aljazeera_2.png', 'allianz_2.png', 'amazon_2.png', 'american-express_2.png', 'android_2.png', 'animal-planet_2.png', 'apple_4.png', 'aquafresh_2.png', 'ariel_2.png', 'asus_3.png', 'audi_3.png', 'avg_2.png', 'axa_2.png', 'bacardi_2.png', 'barbie_1.png', 'barclays_3.png', 'batman_4.png', 'bayer_2.png', 'beko_3.png', 'bic_2.png', 'billabong_2.png', 'blackberry_2.png', 'blizzard_2.png', 'bluetooth_2.png', 'bluray_2.png', 'bnp-paribas_2.png', 'bp_2.png', 'bridgestone_2.png', 'bulgari_3.png', 'bundesliga_2.png', 'burger-king_2.png', 'cadillac_2.png', 'camel_3.png', 'cartoon-network_2.png', 'casio_3.png', 'chesterfield_2.png', 'chevrolet_2.png', 'chevron_2.png', 'chrome_2.png', 'chupa-chups_3.png', 'cinema-city_3.png', 'cisco_2.png', 'cnbs_2.png', 'cnn_2.png', 'cocacola_2.png', 'colgate_3.png', 'columbia-pictures_2.png', 'columbia_2.png', 'converse_2.png', 'cornetto_3.png', 'counter-strike_2.png', 'credit-suisse_3.png', 'crocs_2.png', 'delmonte_3.png', 'dhl_3.png', 'dior_2.png', 'discovery_2.png', 'disney_1.png', 'dolby_3.png', 'domino_2.png', 'dove_2.png', 'dragonball_3.png', 'dreamworks_2.png', 'dropbox_2.png', 'drpepper_2.png', 'dunkin-donuts_2.png', 'duracell_3.png', 'easports_2.png', 'easyjet_3.png', 'ebay_3.png', 'element_2.png', 'elf_1.png', 'epson_5.png', 'espn_2.png', 'esprit_4.png', 'facebook_3.png', 'family-guy_3.png', 'fanta_3.png', 'fedex_2.png', 'felix_2.png', 'ferrari_2.png', 'fila_2.png', 'flickr_3.png', 'formula1_3.png', 'fritos_2.png', 'garmin_3.png', 'geox_3.png', 'google-drive_2.png', 'greenpeace_3.png', 'hardrock-cafe_3.png', 'harvard_2.png', 'hbo_2.png', 'hello-kitty_2.png', 'hermes_2.png', 'hilton_2.png', 'hotwheels_2.png', 'huawei_2.png', 'hugo-boss_2.png', 'ibm_2.png', 'ikea_2.png', 'instagram_2.png', 'intel_2.png', 'jackass_3.png', 'jaguar_2.png', 'jenga_3.png', 'juicy-fruit_4.png', 'kinder_2.png', 'kroger_3.png', 'ktm_3.png', 'lavazza_3.png', 'lincoln_2.png', 'lindt_3.png', 'linkedin_3.png', 'lonely-planet_3.png', 'loreal_3.png', 'lotus_2.png', 'lucas-arts_2.png', 'lucky-strike_2.png', 'man_2.png', 'marlboro_2.png', 'mars_2.png', 'martini_3.png', 'marvel_3.png', 'maserati_2.png', 'mastercard_2.png', 'mazda_2.png', 'mcafee_2.png', 'mcdonalds_2.png', 'mercedes_2.png', 'metallica_3.png', 'michelin_2.png', 'microsoft_2.png', 'milky-way_2.png', 'minecraft_3.png', 'mitshubishi_2.png', 'monster-high_2.png', 'monster_4.png', 'mozilla-firefox_2.png', 'mtv_2.png', 'national-geographic_1.png', 'nescafe_2.png', 'nestle_1.png', 'netflix_2.png', 'nhl_2.png', 'nike_2.png', 'nintendo_2.png', 'nirvana_2.png', 'nissan_3.png', 'nivea_2.png', 'nutella_3.png', 'nvidia_2.png', 'opel_2.png', 'opera_2.png', 'oracle_2.png', 'oralb_2.png', 'oreo_2.png', 'oriflame_2.png', 'palmolive_2.png', 'pantene_3.png', 'pepsi_2.png', 'philips_3.png', 'pinterest_3.png', 'pizzahut_3.png', 'playdoh_3.png', 'playskool_3.png', 'playstationportable_2.png', 'playstation_2.png', 'popcap_3.png', 'powerpoint_2.png', 'pringles_2.png', 'pritt_3.png', 'puma_2.png', 'ralph-lauren_1.png', 'redbull_2.png', 'reddit_2.png', 'rexona_3.png', 'rolex_1.png', 'rollerblade_1.png', 'safari_2.png', 'samsung_3.png', 'sega_2.png', 'seven-eleven_2.png', 'shell_2.png', 'skoda_2.png', 'skype_3.png', 'snapchat_4.png', 'sony_3.png', 'speedo_1.png', 'spotify_1.png', 'sprite_2.png', 'starbucks_2.png', 'street-fighter_2.png', 'superman_4.png', 'suzuki_2.png', 't-mobile_2.png', 'the-new-york-times_2.png', 'thenorthface_2.png', 'threem_3.png', 'timberland_2.png', 'time_3.png', 'tnt_3.png', 'tomtom_2.png', 'topgear_2.png', 'toshiba_2.png', 'tropicana_2.png', 'tumbir_2.png', 'twitter_2.png', 'uncle-bens_2.png', 'unesco_3.png', 'unicef_2.png', 'unilever_2.png', 'vans_3.png', 'vimeo_1.png', 'visa_2.png', 'vodafone_2.png', 'wella_2.png', 'whatsapp_3.png', 'whirpool_3.png', 'wifi_3.png', 'wikipedia_2.png', 'wilson_2.png', 'winamp_1.png', 'windows_2.png', 'winterfresh_1.png', 'world-of-warcraft_2.png', 'wwf_2.png', 'yamaha_2.png', 'youtube_2.png', 'zippo_3.png', 'zte_3.png']

// Devo generare un logo casuale all'inizio della partita
document.addEventListener('DOMContentLoaded', function(){
    cambiaLogo();

    let modalità = window.location.pathname;
    if(modalità == "/html/prova_a_tempo.php"){
        
        // Faccio partire il timer
        setInterval(function(){
            let timer = document.getElementById("timer").textContent;
            let tempoRimasto = parseInt(timer.match(/\d+/)[0]);
            tempoRimasto--;
            if(tempoRimasto == -1){
                endgame();
            }
            document.getElementById("timer").textContent = tempoRimasto + " secondi rimanenti";
        }, 1000);

    }
});

// Evento che si attiva quando l'utente immette una risposta
document.getElementById("risposta").addEventListener("keydown", function(event) {
    if (event.key === "Enter") {
        
        // Prendo il nome vero del logo per validare la risposta dell'utente
        let logo = document.getElementById("logo");
        let urlLogo = logo.src;
        let nomeLogo = urlLogo.substring(urlLogo.lastIndexOf('/') + 1);
        nomeLogo = nomeLogo.split('_');
        let soluzione = nomeLogo[0];
        soluzione = soluzione.replace(/-/g, " ");
        
        let risposta = document.getElementById("risposta").value;
        risposta = risposta.toLowerCase();

        // Pulisco la casella di input
        document.getElementById("risposta").value = "";

        // Devo impedire che l'utente prema ripetutamente enter
        // Dato che farebbe perdere più punti del previsto e avere più indizi
        document.getElementById("risposta").disabled = true;
        setTimeout(() => {
            document.getElementById("risposta").disabled = false;
        }, 2000);
        
        // Gestisco le varie modalità
        let modalità = window.location.pathname;
        switch(modalità){
            case "/html/gioco.php":
                if(risposta == soluzione){
                    alzaPunteggio();
                    mostraCorretto();
                }
                else{
                    abbassaPunteggio();
                    mostraSbagliato();
                }
                break;

            case "/html/prova_a_tempo.php":
                if(risposta == soluzione){
                    alzaPunteggio();
                    mostraCorretto();
                }
                else{
                    abbassaPunteggio();
                    mostraSbagliato();
                }
                break;

            case "/html/la_pratica_rende_perfetti.php":
                if(risposta == soluzione){
                    alzaPunteggio();
                    mostraCorretto();
                }
                else{
                    endgame();
                }
                break;
        }
        
    }

});

let indice = 0;
document.addEventListener("keydown", function(event){
    // Devo scorrere l'array e quando sono premuti i tasti in sequenza
    let codice = ['ArrowUp', 'ArrowUp', 'ArrowDown', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'ArrowLeft', 'ArrowRight', 'a', 'b'];
    if(event.key == codice[indice]){
        indice++;
        if(indice == codice.length){
            // Ho inserito tutto il codice quindi attivo l'easter egg
            indice = 0;
            let punteggio = Number(document.getElementById("punteggio_attuale").textContent);
            punteggio += 99;
            document.getElementById("punteggio_attuale").textContent = punteggio;
        }
    }
});


// Si attiva quando si clicca il tasto finepartita
document.getElementById("torna_indietro").addEventListener("click", finePartita);
function finePartita(event){
    event.preventDefault();
    
    if(confirm("Vuoi terminare la partita?")){
        endgame();
    }
}

// Gestisco il fine partita nel caso in cui prema il tasto o l'utente perda
function endgame(){

    // Recap all'utente
    mostraPunteggi();

    const punteggio = document.getElementById("punteggio_attuale").textContent;
    // Salvo i punteggi
    const req = new XMLHttpRequest();
    req.open("POST", "../php/salvaPunteggio.php");
    
    let modalità = window.location.pathname;
    console.log("Mandato a" + modalità);

    const data = {
        punteggio: punteggio,
        modalità: modalità
    };
    req.send(JSON.stringify(data));
    
}

function alzaPunteggio(){
    let punteggio_attuale = Number(document.getElementById("punteggio_attuale").textContent);
    punteggio_attuale++;

    document.getElementById("punteggio_attuale").textContent = punteggio_attuale;
}

function abbassaPunteggio(){
    let punteggio_attuale = Number(document.getElementById("punteggio_attuale").textContent);
    if(punteggio_attuale > 0){
        punteggio_attuale--;
    }

    document.getElementById("punteggio_attuale").textContent = punteggio_attuale;
}

function azzeraPunteggio(){
    document.getElementById("punteggio_attuale").textContent = 0;
}

function cambiaLogo(){
    // Devo scegliere un immagine random da mostrare
    let indiceRandom = Math.floor(Math.random() * fileImmagini.length);
    let logoRandom = fileImmagini[indiceRandom];
    
    document.getElementById("logo").src = "../img/" + logoRandom;
    
    // Tolgo cose in più al nome per la sezione degli aiuti
    logoRandom = logoRandom.split('_');
    let nomeLogo = logoRandom[0];
    nomeLogo = nomeLogo.replace(/-/g, " ");
    
    let parola = document.getElementById("parola");
    parola.style.display = "flex";
    
    let caselle = document.getElementById("caselle");
    
    // Pulisco le caselle
    while (caselle.firstChild) {
        caselle.removeChild(caselle.firstChild);
    }
    
    // Metto le nuove
    for(let i = 0; i < nomeLogo.length; i++){
        let nuovaCasella = document.createElement("td");
        if(nomeLogo[i] != " "){
            // nuovaCasella.textContent = nomeLogo[i];
            caselle.appendChild(nuovaCasella);
        }
        else{
            let spazio = document.createElement("td");
            spazio.className = "spaziatura"
            caselle.appendChild(spazio);
        }
    }
}

function aggiungiLettera(){
    let urlLogo = document.getElementById("logo").src;

    
    let logoCur = urlLogo.substring(urlLogo.lastIndexOf('/') + 1);
    logoCur = logoCur.split('_');
    let nomeLogo = logoCur[0];
    nomeLogo = nomeLogo.replace(/-/g, " ");
    
    let indiceRandom;
    let caselle = document.getElementById("caselle");
    let scatola;

    // per impedire starvation
    let conto = 0;

    while(true){
        indiceRandom = Math.floor(Math.random() * nomeLogo.length);
        scatola = caselle.cells[indiceRandom];

        // Per evitare la starvation, non può essere troppo basso perché potrei avere sfortuna
        // e beccare più volte di fila una casella piena o con lo spazio nel nome
        conto++;
        if(conto > 30){
            console.error("Hai finito gli aiuti!");
            return;
        }
        // Se ho già rivelato quella lettera o ho beccato uno spazio nel nome
        if(scatola.textContent != "" || nomeLogo[indiceRandom] == " "){
            continue;
        } else {
            break;
        }
    }
    
    scatola.textContent = nomeLogo[indiceRandom];
}

function mostraCorretto(){
    let parola = document.getElementById("parola");
    let esito = document.getElementById("esito");

    parola.style.display = "none";
    esito.style.display = "flex";
    esito.textContent = "CORRETTO";
    setTimeout(function(){
        esito.style.display = "none"
        cambiaLogo();
    }, 2000);

}

function mostraSbagliato(){
    let parola = document.getElementById("parola");
    let esito = document.getElementById("esito");

    parola.style.display = "none";
    esito.style.display = "flex";
    esito.textContent = "ERRATO";
    setTimeout(function(){
        esito.style.display = "none"
        parola.style.display = "flex"
        aggiungiLettera();
    }, 2000);

}

function mostraPunteggi(){
    document.getElementById("risultatofinale").textContent = document.getElementById("punteggio_attuale").textContent;
    document.getElementById("container").style.display = "none";
    document.getElementById("risultati").style.display = "flex";
    setTimeout(function(){
        location.href = "home.php";
    }, 5000);
}