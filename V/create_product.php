<div class="container-form">  
  <form id="contact" action="?c=create" method="POST">
      <h3>Alessandro's shop</h3>
      <h4>Add a new product to your list </h4>
      <input placeholder="Product's name" type="text" name="name" required >

      <input placeholder="Category" type="text" name="categories" required >
      <label for="categories" class="col-sm-2 control-label">Categorie:</label>
      <br>
      <select class="validate" id="categories" name="categories" required>
        <?php
          displayCategories();
        ?>
      </select>		 

      <input placeholder="Quantity" type="text" name="quantity" required >

      <input placeholder="Price  Min(₡100.00) - Max(₡9999999.00)" min="100" max="9999999" type="number" name="price" required>

      <input placeholder="Description of your product" type="text" name="description" required>

      <br>
      <br>
      <input type='submit' value="Upload">
  </form>
</div>