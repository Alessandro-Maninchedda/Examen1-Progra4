<?php
  include "M/product.php";
  if($_POST){
    $product = new product($_POST['name'], $_POST['categories'], $_POST['quantity'], $_POST['price'], $_POST['description'], $_POST['id']);
    $product->update();
    $rows = $product->select();
    include 'V/view_all_products.php';
  }elseif (isset($_GET['id'])) {
    echo "entro";
    $product = new product();
    $row = $product->select($_GET['id'])[0];
    include 'V/update_product.php';
  }
  