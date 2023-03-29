<?php 

  $obj=new blogproject();
  $dcat=$obj->show_cat();

  if(isset($_GET['status'])){
  	if($_GET['status']=='delete'){
  		$delid=$_GET['id'];
  		$msg=$obj->delete_cat($delid);
  	}
  }
 ?>

<h1>Add Manage Category</h1>
<?php 
  if(isset($msg)){
  	echo $msg;
  }
 ?>
<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Category Name</th>
      <th scope="col">Category Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php while($catdata=mysqli_fetch_assoc($dcat)) { ?>
    <tr>
      <td><?php echo $catdata['id']; ?></td>
      <td><?php echo $catdata['name']; ?></td>
      <td><?php echo $catdata['des']; ?></td>	
      <td>
      	<a href="edit_category.php?status=edit&&id=<?php echo $catdata['id']; ?>" class="btn btn-success">Success</a>
      	<a href="?status=delete&&id=<?php echo $catdata['id']; ?>" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>