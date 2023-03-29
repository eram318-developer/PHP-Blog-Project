<?php 
$obj=new blogproject(); 


 if(isset($_GET['status'])){
 
  if($_GET['status']=='edit'){
    $id=$_GET['id'];
    $splitinfo=$obj->updateinitial($id);
    }
  }

  if(isset($_POST['usubmit'])){
      $upmsg=$obj->updatefinal($_POST);
    }
 
 ?>

 <?php
   include_once("includes/head.php");
  ?>

 <?php
   include_once("includes/footer.php");
  ?>
 
<?php if(isset($upmsg))  {echo $upmsg;} ?>
<form action="" method="POST">
  <div class="mb-3">
     <label for="e1" class="form-label">Category Name</label>
     <input type="text" name="ucat_name" class="form-control" id="e1" placeholder="Enter Category Name" value="<?php echo $splitinfo['name']; ?>">
 </div>

<div class="mb-3">
  <label for="e2" class="form-label">Example textarea</label>
  <input type="text" name="cat_des" rows="3" class="form-control" id="e2" value="<?php echo $splitinfo['des']; ?>">
</div>
<input type="hidden" name="upid" value="<?php echo $splitinfo['id']; ?>">
<input type="submit" name="usubmit" value="Add Category" class="form-control btn btn-block btn-primary">
</form>