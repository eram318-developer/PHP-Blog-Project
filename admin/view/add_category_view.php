<?php 

 $obj=new blogproject();
 if(isset($_POST['submit'])){
 	$return_msg=$obj->addcat($_POST);
 }

 ?>




<h1>Add Category</h1>
<?php if(isset($return_msg)){echo $return_msg;} ?>
<form action="" method="POST">
  <div class="mb-3">
  	 <label for="e1" class="form-label">Category Name</label>
  	 <input type="text" name="cat_name" class="form-control" id="e1" placeholder="Enter Category Name">
 </div>


<div class="mb-3">
  <label for="e2" class="form-label">Example textarea</label>
  <input type="text" name="cat_des" rows="3" class="form-control" id="e2" placeholder="Enter Category Name">
</div>

<input type="submit" name="submit" value="Add Category" class="form-control btn btn-block btn-primary">
</form>