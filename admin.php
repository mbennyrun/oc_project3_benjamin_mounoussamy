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



require_once(ABSOLUTE_PATH. '/controllers/backend.php');




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
    elseif ($_GET['action'] == 'newPost') {
            if (!empty($_POST['title']) && !empty($_POST['content'])) {
                newPost($_POST['title'], $_POST['content']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
    }
    elseif ($_GET['action'] == 'editPost') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            if (!empty($_POST['title']) && !empty($_POST['content'])) {
                editPost($_GET['id'], $_POST['title'], $_POST['content']);
            }
            else {
                echo 'Erreur : tous les champs ne sont pas remplis !';
            }
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'delPost') {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            delPost($_GET['id']);
        }
        else {
            echo 'Erreur : aucun identifiant de billet envoyé';
        }
    }
    elseif ($_GET['action'] == 'unflag') 
    {
        if (!empty($_GET['idComment']) && !empty($_GET['idPost'])) {
            unflag();
        }
        else {
            echo 'Erreur : Aucun commentaire signalé';
        }
    }
    elseif ($_GET['action'] == 'delComment') 
    {
        if (!empty($_GET['idComment']) && !empty($_GET['idPost'])) {
            delComment($_GET['idComment']);
        }
        else {
            echo 'Erreur : Aucun commentaire à supprimé';
        }
    }
}
else {
    homepage();
}




