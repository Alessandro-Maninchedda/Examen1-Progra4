<?php 
if($_POST){
  include 'M/product.php';
  $product = new product($_POST['name'], $_POST['categories'], $_POST['quantity'], $_POST['price'], $_POST['description']);
  $product->create();
  $rows = $product->select();
  include "V/view_all_products.php";
}else{
  include "V/create_product.php";
}
 