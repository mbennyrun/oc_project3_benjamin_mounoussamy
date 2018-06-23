<?php

class Manager
{
    protected function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=db_oc_project_3;charset=utf8', 'root', '');
        return $db;
    }


    public static function checkSessionAndRedirect() {

    	if ( empty($_SESSION['user']) ) {
    		header('Location: admin.php?action=formConnect');
    	}
    }
}