<?php ob_start(); ?>

<?php

switch ($_GET['erreur']) {

	case '404':
    	echo 'La page n\'existe pas ou plus !';
    	break;

    default:
   		echo 'Erreur !';
   		break;
}
?>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>