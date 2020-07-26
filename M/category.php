<?php
/**
 * Description of product
 *
 * @author admin
 */

include "M/connection1.php";
class category {
public $name;
public $description;
private $id;

/**
* 
* @param type $pname
* @param type $pdescription
* @param integer $pid
*/

   public function __construct($pname= "",  $pdescription = "", $pid = 0) {
      $this->name = $pname;
      $this->description = $pdescription;
      $this->id = $pid;
   }

   public function create(){
      try{
         $sql = "INSERT INTO categories (name,  description) VALUES"
         . " ('$this->name', '$this->description')";
         // print_r($sql);
         $pdo = new conection();
         $pdo = $pdo->open();
         $pdo->query($sql);
      } catch (PDOException $ex) {
         print_r("Error at funtion".__FUNCTION__." in the file".__FILE__." with error ".$ex->getMessage());
         error_log("Error at funtion".__FUNCTION__." in the file".__FILE__." with error ".$ex->getMessage());
      }
      return false;
   }

   public function select($id = 0){
      $rows = [];
      try{
         $sql = "SELECT * FROM categories";

         if($id){
         $sql .= " WHERE id='$id'";
         }
         $pdo = new conection();
         $pdo = $pdo->open();
         $result = $pdo->query($sql);
      
      // recorrer cada elemento en un un arreglo
      foreach ($result->fetchAll() as $value){
         $rows [] = new category($value['name'], $value['description'], $value['id']);
      }
      
      } catch (Exception $ex) {
         error_log("Error at funtion".__FUNCTION__." in the file".__FILE__." with error ".$ex->getMessage());
      }
      return $rows; 
   }

   public function delete($id = 0){
      $id =  ($id) ? $id : $this->id;
      $sql = "DELETE FROM categories WHERE id = '$id'";
      // echo $sql;
      $pdo = new conection();
      $pdo = $pdo->open();
      return $pdo->query($sql);
   }

   public function update(){
      $sql = "UPDATE categories SET name = '$this->name', description = '$this->description'"
         . " WHERE id='$this->id'";
      echo $sql;
      $pdo = new conection();
      $pdo = $pdo->open();
      return $pdo->query($sql);
   }

   public function get_attribute($name){
      try{
      return $this->$name;
      } catch (Exception $ex) {
      return NULL;
      }
   }
}