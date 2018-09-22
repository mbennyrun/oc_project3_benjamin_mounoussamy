<?php

class Manager

{
  protected static $instance;

  public static function dbConnect()
  {
    if (is_null(self::$instance)) // Si on instancie notre classe pour la première fois.
    {
      self::$instance = new PDO('mysql:host=localhost;dbname=db_oc_project_3;charset=utf8', 'root', '');
    }
    return self::$instance; // Sinon on retourne l'objet déjà instancié
  }
}