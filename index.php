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
    elseif ($_GET['action'] == 'post') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            post();
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'flag') 
    {
        if (!empty($_GET['idComment']) && !empty($_GET['idPost'])) {
            flag();
        }
        else {
            echo 'Erreur : Aucun commentaire à signalé';
        }
    }
    elseif ($_GET['action'] == 'newComment') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                newComment($_GET['id'], $_POST['author'], $_POST['comment']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
}
else {
    homepage();
}