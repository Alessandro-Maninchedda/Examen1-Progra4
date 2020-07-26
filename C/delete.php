<?php
  include "M/product.php";
  $product = new product();
  if(isset($_GET['id'])){
    $product->delete($_GET['id']);
  }
  $rows = $product->select();
  include 'V/view_all_products.php';