<?php

use App\Connection;

function est_connecte():bool {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    return !empty($_SESSION['connecté']);
}


function force_utilisateur_connecte ():void
{

    if (!est_connecte()){
        header('Location: /geek');
        exit();
    }
}