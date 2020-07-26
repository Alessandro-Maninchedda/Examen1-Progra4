<?php
  include "M/category.php";
  if($_POST){
    $category = new category($_POST['name'], $_POST['description'], $_POST['id']);
    $category->update();
    $rows = $category->select();
    include 'V/view_all_categories.php';
  }elseif (isset($_GET['id'])) {
    echo "entro";
    $category = new category();
    $row = $category->select($_GET['id'])[0];
    include 'V/update_category.php';
  }
  