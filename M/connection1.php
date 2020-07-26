<?php
/**
 * Manage the database connection
 *
 * @author admin
 */
include 'M/config.php';
class conection {
  private  $dsn;
  public function __construct() {
    $this->dsn = "mysql:dbname=".DB_NAME;
  }
  /*
   * Open the connection to the database
   */
  public function open(){
    try{
      // echo "entro";
      return new PDO($this->dsn, DB_USER, DB_PASS);
    } catch (Exception $ex) {
      die($ex->getMessage());
    }
    
  }
}
