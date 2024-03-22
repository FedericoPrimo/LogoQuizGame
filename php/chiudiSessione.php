<?php
    // Recupero la sessione
    session_start();
    
    // E la elimino
    session_unset();
    session_destroy();
        
    exit;
?>