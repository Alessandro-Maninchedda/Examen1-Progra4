<h1 class="all-h">All your products</h1>
<hr>
<table class="a">
  <thead>
    <th>Name</th>
    <th>Category</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Description</th>
    <th>Read</th>
    <th>Delete</th>
    <th>Edit</th>
  </thead>
  <tbody>
    <?php foreach($rows as $row) {?>
      <tr>
        <td><?php echo $row->name;?></td>
        <td><?php echo $row->categories;?></td>
        <td><?php echo $row->quantity;?></td>
        <td><?php echo $row->price;?></td>
        <td><?php echo $row->description;?></td>
        <td><a href='?c=view&id=<?php echo $row->get_attribute('id'); ?>'>Read</a></td>
        <td><a href='?c=delete&id=<?php echo $row->get_attribute('id'); ?>'>Delete</a></td>
        <td><a href='?c=update&id=<?php echo $row->get_attribute('id'); ?>'>Edit</a></td>
      </tr>
    <?php } ?> 
  </tbody>
</table>
<hr>
<a href="?c=create">Add a new product.</a>