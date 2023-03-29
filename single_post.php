 <?php
 
   include("admin/class/function.php");
   $obj=new blogproject();
   
   $getcat=$obj->show_cat();

   if(isset($_GET['view'])){
     if($_GET['view']=='postview'){
        $id=$_GET['id'];
        $ai=$obj->updatetwoinfo($id);
     }
   }

 ?>



<?php include_once("includes/head.php");  ?>

 <body>


 
<?php include_once("includes/preloader.php");  ?>
    <!-- Header -->
<?php include_once("includes/header.php");  ?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
<?php include_once("includes/banner.php");  ?>
    <!-- Banner Ends Here -->

<?php include_once("includes/cta.php");  ?>


<section class="blog-posts">
  <div class="container">
     <div class="row">
       <div class="col-lg-8">
          <img src="upload/<?php echo $ai['post_img']; ?>" class="img-fluid">
          <h1 class="pt-3"><?php echo $ai['post_title']; ?></h1>
          <p class="pt-3"><?php echo $ai['post_date']; ?></p>
          <p class="pt-3"><?php echo $ai['post_content']; ?></p>
      </div>
<?php include_once("includes/sidebar.php");  ?>       
    
    </div>
  </div>
    </section>

<?php include_once("includes/footer.php");  ?>     
  

    <!-- Bootstrap core JavaScript -->
 <?php include_once("includes/script.php");  ?>  

  </body>
</html>