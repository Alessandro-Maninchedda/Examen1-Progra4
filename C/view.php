<?php
  include "M/product.php";
  $product = new product();
  if(isset($_GET['id'])){
    $row = $product->select($_GET['id'])[0];
    include "V/view_product.php";
  }else{
    $rows = $product->select();
    include "V/view_all_products.php";
  }
    