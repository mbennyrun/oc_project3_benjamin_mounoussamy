<?php

// Definition du path absolu
define("ABSOLUTE_PATH", dirname(__FILE__));

// autoloader, chargement automatique des classes
function __autoload($className) {

    $invalidChars = array(
        '.', '\\', '/', ':', '*', '?', '"', '<', '>', "'", '|'
    );    
    $className = str_replace($invalidChars, '', $className);
    $path      = ABSOLUTE_PATH .'/models/';
    $filename  = $path .$className . '.php';
    if ( file_exists($filename) ) {
        require_once $filename;
    }
}



require_once(ABSOLUTE_PATH. '/controllers/frontend.php');




if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listPosts') {
        listPosts();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
else {
    homepage();
}