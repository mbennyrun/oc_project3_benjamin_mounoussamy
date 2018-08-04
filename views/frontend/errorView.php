<<?php

switch($_GET['erreur'])
{
    case '404':
    	echo 'La page n\'existe pas ou plus !';
    	break;

    default:
    	echo 'Erreur !';