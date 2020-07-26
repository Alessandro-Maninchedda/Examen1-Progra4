<?php
  include "M/category.php";
  $category = new category();
  if(isset($_GET['id'])){
    $category->delete($_GET['id']);
  }
  $rows = $category->select();
  include 'V/view_all_categories.php';