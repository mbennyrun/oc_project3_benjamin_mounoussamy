<?php

session_start();

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



$action = '';
if ( !empty($_GET['action']) ) {
    $action = $_GET['action'];
}

switch ( $action ) {

    case 'formConnect':
        formConnect();
        break;

    case 'submitFormConnect':
        submitFormConnect();
        break;

    case 'listPosts':
        listPosts();
        break;
    
    case 'post':
        post();
        break;

    case 'newPost':
        newPost();
        break;

    case 'editPost':
        editPost();
        break;

    case 'delPost':
        delPost();
        break;

    case 'unflag':
        unflag();
        break;
    
    case 'delComment':
        delComment();
        break;

    case 'disconnect':
        disconnect();
        break;
        
    default:
        homepage();
        break;
}