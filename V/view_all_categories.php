<h1 class="all-h">All your categories</h1>
<hr>
<table class="a">
  <thead>
    <th>Category</th>
    <th>Description</th>
    <th>Read</th>
    <th>Delete</th>
    <th>Edit</th>
  </thead>
  <tbody>
    <?php foreach($rows as $row) {?>
      <tr>
        <td><?php echo $row->name;?></td>
        <td><?php echo $row->description;?></td>
        <td><a href='?cc=viewC&id=<?php echo $row->get_attribute('id'); ?>'>Read</a></td>
        <td><a href='?cc=deleteC&id=<?php echo $row->get_attribute('id'); ?>'>Delete</a></td>
        <td><a href='?cc=updateC&id=<?php echo $row->get_attribute('id'); ?>'>Edit</a></td>
      </tr>
    <?php } ?> 
  </tbody>
</table>
<hr>
<a href="?cc=createC">Add a new category.</a>