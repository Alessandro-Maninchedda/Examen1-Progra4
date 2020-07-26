<form action="?c=update" method="POST">
  <input type="text" name="name" placeholder="name" value="<?php echo $row->owner ?>">

  <input type="text" name="category" placeholder="category" value="<?php echo $row->blog ?>">
  
  <input type="number" name="quanrity" placeholder="quantity" value="<?php echo $row->blog ?>">
  
  <input type="number" name="price" placeholder="price" value="<?php echo $row->blog ?>">
  
  <input type="text" name="description" placeholder="description" value="<?php echo $row->description ?>">

  <input type="hidden" name="id" value="<?php echo $row->get_attribute('id') ?>">
  
  <input type='submit' value="Upload">
</form>