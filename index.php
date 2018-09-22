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


$action = '';
if ( !empty($_GET['action']) ) {
    $action = $_GET['action'];
}

switch ( $action ) {

    case 'listPosts':
        listPosts();
        break;

    case 'listAllposts':
        listAllposts();
        break;

    case 'post':
        post();
        break;

    case 'flag':
        flag();
        break;

    case 'newComment':
        newComment();
        break;

    case '';
        homepage();
        break;

    default:
        error();
        break;
}