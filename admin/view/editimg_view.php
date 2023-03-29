<?php 
  if(isset($_GET['status'])){
  	if($_GET['status']=='edit'){
       $id=$_GET['id'];
  	}
  }

  if(isset($_POST['changepic'])){
  	 $getinfo=$obj->editimg($_POST);
  }

 ?>  



<div class="shadow m-5 p-5">
<?php if(isset($getinfo)) { echo $getinfo;} ?>
 <form action="" method="POST" enctype="multipart/form-data">
 <input type="hidden" name="editid" value="<?php echo $id ?>">
  <div class="mb-3">
  	 <label for="e3" class="form-label">Upload Thumbnil</label><br>
  	 <input type="file" name="editpost_img" class="py-4" id="e3" placeholder="Enter Category Name">
 </div>
 <input type="submit" class="btn btn-primary" name="changepic">
</form>
 </div>