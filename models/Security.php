<?php

class Security
{
	public static function checkSessionAndRedirect() {

    	if ( empty($_SESSION['user']) ) {
    		header('Location: admin.php?action=formConnect');
    	}
    }
}