<?php
class Connection{
  // private $driver="mysql";
  // private $host ="localhost";
  // private $user="root";
  // private $pass='';
  // private $dbName="grupo_alianza";
  // private $charset="utf8";

  private static $db = null;

  // protected function conexion(){
  //   try{
  //     $pdo = new PDO("{$this -> driver}:host={$this -> host}:dbname={$this -> dbName}:charset={$this -> charset}", $this-> user, $this -> pass);
  //     $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //     return $pdo;
  //   }
  //   catch (PDOException $e){
  //     die($e->getMessage());
  //   }
  // }

  public static function initialize() {
    if(empty(self::$db)) {
      try {
        self::$db = new PDO('sqlite:' . __DIR__ . '\..\db\grupo_alianza.db');
        self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        // echo "conectado";
      } catch (PDOException $e) {
        // echo __DIR__ . '\..\db\grupo_alianza.db';
        die($e->getMessage());
      }
    }
  }
  public static function getInstance() {
    return self::$db;
  }
}
// $s = new Connection();
// $s -> initialize();
?>