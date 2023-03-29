<?php 

  if(isset($_GET['status'])){
       if($_GET['status']='editpost'){
       	  $id=$_GET['id'];
       	  $splittwoinfo=$obj->updatetwoinfo($id);
       }
  }

  if(isset($_POST['upinfo'])){
      $uptwoinfo=$obj->updatetwoinfo2($_POST);
    }

 ?>




<?php if(isset($uptwoinfo)) { echo $uptwoinfo;} ?>
<form action="" method="POST">
  <div class="mb-3">
  	 <label for="e1" class="form-label">Post Title</label>
  	 <input type="text" name="changepost_title" class="form-control" id="e1" placeholder="Enter Post Title" value="<?php echo $splittwoinfo['post_title']; ?>">
 </div>


  <div class="mb-3">
  	 <label for="e2" class="form-label">Post Content</label>
  	 <textarea class="form-control" name="changepost_content" id="e2" cols="30" rows="10">
  	 	
  	 <?php echo $splittwoinfo['post_content']; ?>
  	 </textarea>
 </div>
 <input type="hidden" name="upid" value="<?php echo $id ?>">
 <input type="submit" name="upinfo" value="Update Info" class="form-control btn btn-block btn-primary">
</form>