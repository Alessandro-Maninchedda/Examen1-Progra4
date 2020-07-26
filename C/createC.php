<?php 
if($_POST){
  include 'M/category.php';
  $category = new category($_POST['name'], $_POST['description']);
  $category->create();
  $rows = $category->select();
  include "V/view_all_categories.php";
}else{
  include "V/create_category.php";
}
 