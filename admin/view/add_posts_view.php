<?php 

  $category=$obj->show_cat();

  if(isset($_POST['add_cat'])){
  	$sobinfo=$obj->add_admin($_POST);
  }

 ?>

<h1>Add Posts</h1>

<?php if(isset($sobinfo)) {echo $sobinfo;} ?>
<form action="" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
  	 <label for="e1" class="form-label">Post Title</label>
  	 <input type="text" name="post_title" class="form-control" id="e1" placeholder="Enter Post Title">
 </div>


  <div class="mb-3">
  	 <label for="e2" class="form-label">Post Content</label>
  	 <textarea class="form-control" name="post_content" id="e2" cols="30" rows="10"></textarea>
 </div>


  <div class="mb-3">
  	 <label for="e3" class="form-label">Upload Thumbnil</label><br>
  	 <input type="file" name="post_img" class="py-4" id="e3" placeholder="Enter Category Name">
 </div>


  <div class="mb-3">
  	 <label for="e4" class="form-label">Select Post Category</label>
  	 <select class="form-control" name="post_cat" id="e4">
  	 	
  	 	<?php while($cc=mysqli_fetch_assoc($category)) { ?>
       
        	<option value="<?php echo $cc['id']; ?>"><?php echo $cc['name']; ?></option>
       
       <?php } ?>
  	 
  	 </select>
 </div>


  <div class="mb-3">
  	 <label for="e5" class="form-label">Post Summary</label>
  	 <input type="text" name="post_sum" class="form-control" id="e5" placeholder="Enter Category Name">
 </div>


  <div class="mb-3">
  	 <label for="e6" class="form-label">Post Tag</label>
  	 <input type="text" name="post_tag" class="form-control" id="e6" placeholder="Enter Category Name">
 </div>


  <div class="mb-3">
  	 <label for="e7" class="form-label">Post Status</label>
  	 <select class="form-control" name="post_status" id="e7">
  	 	<option value="1">Published</option>
        <option value="0">Unpublished</option>
  	 </select>
 </div>

<input type="submit" name="add_cat" value="Add Category" class="form-control btn btn-block btn-primary">
</form>