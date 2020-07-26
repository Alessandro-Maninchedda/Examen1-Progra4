<form action="?cc=updateC" method="POST">
  <input type="text" name="name" placeholder="name" value="<?php echo $row->owner ?>">

  <input type="text" name="description" placeholder="description" value="<?php echo $row->description ?>">


  <input type="hidden" name="id" value="<?php echo $row->get_attribute('id') ?>">
  
  <input type='submit' value="Upload">
</form>