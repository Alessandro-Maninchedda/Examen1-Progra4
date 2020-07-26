<?php
   include "M/product.php";
   $product = new product();
   $rows = $product->lowStock();
   include "V/view_less_than5.php";