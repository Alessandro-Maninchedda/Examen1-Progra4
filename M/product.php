<?php
/**
 * Description of product
 *
 * @author admin
 */

include "M/connection1.php";
class product {
public $name;
public $categories;
public $quantity;
public $price;
public $description;
private $id;

/**
* 
* @param type $pname
* @param type $pcategories
* @param integer $pquantity
* @param integer $pprice
* @param type $pdescription
* @param integer $pid
*/

   public function __construct($pname= "", $pcategories = "",$pquantity = "" ,$pprice = "", $pdescription = "", $pid = 0) {
      $this->name = $pname;
      $this->categories = $pcategories;
      $this->quantity = $pquantity;
      $this->price = $pprice;
      $this->description = $pdescription;
      $this->id = $pid;
   }

   public function displayCategories(){
      try{
         $sql = "SELECT * FROM categories";
         $pdo = new conection();
         $pdo = $pdo->open();
         $pdo->query($sql);
         
         while ($value = mysqli_fetch_array($sql)) {
               echo '<option value="'.$value[name].'">'.$value[name].'</option>';
         }

      } catch (PDOException $ex) {
         print_r("Error at funtion".__FUNCTION__." in the file".__FILE__." with error ".$ex->getMessage());
         error_log("Error at funtion".__FUNCTION__." in the file".__FILE__." with error ".$ex->getMessage());
      }
      return $value; 
   }

   public function lowStock(){
      $rows = [];
      try{
         $sql = "SELECT * FROM products ORDER BY id DESC WHERE quantity <= 5";
  
         $pdo = new conection();
         $pdo = $pdo->open();
         $result = $pdo->query($sql);
  
         foreach ($result->fetchAll() as $value){
            $rows [] = new product( $value['name'], $value['categories'], $value['quantity'], $value['price'],$value['description'], $value['id']);
         }
      
      } catch (Exception $ex) {
         error_log("Error en la funcion".__FUNCTION__." en el archivo".__FILE__." con el error ".$ex->getMessage());
      }
      return $rows; 
    }

   public function create(){
      try{
         $sql = "INSERT INTO products (name, categories, quantity, price, description) VALUES"
         . " ('$this->name', '$this->categories', '$this->quantity', '$this->price','$this->description')";
         print_r($sql);
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
         $sql = "SELECT * FROM products";

         if($id){
         $sql .= " WHERE id='$id'";
         }
         $pdo = new conection();
         $pdo = $pdo->open();
         $result = $pdo->query($sql);
      
      // recorrer cada elemento en un un arreglo
      foreach ($result->fetchAll() as $value){
         $rows [] = new product( $value['name'], $value['categories'], $value['quantity'], $value['price'],$value['description'], $value['id']);
      }
      
      } catch (Exception $ex) {
         error_log("Error at funtion".__FUNCTION__." in the file".__FILE__." with error ".$ex->getMessage());
      }
      return $rows; 
   }

   public function delete($id = 0){
      $id =  ($id) ? $id : $this->id;
      $sql = "DELETE FROM products WHERE id = '$id'";
      // echo $sql;
      $pdo = new conection();
      $pdo = $pdo->open();
      return $pdo->query($sql);
   }

   public function update(){
      $sql = "UPDATE products SET name = '$this->name', categories = '$this->categories', quantity = '$this->quantity', price = '$this->price', description = '$this->description'"
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