<?php
  include "M/category.php";
  $category = new category();
  if(isset($_GET['id'])){
    $row = $category->select($_GET['id'])[0];
    include "V/view_category.php";
  }else{
    $rows = $category->select();
    include "V/view_all_categories.php";
  }
    