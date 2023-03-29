   
  <?php

      include("class/function.php");
      $obj=new blogproject();
      session_start();
       
      $id=$_SESSION['admin_id']; 
      //id null hole I mean log in obostae na thkle tar ei page er thakar rights nai so se index.php page ei jabe//
      if($id==null){
        header("location:index.php");
      } 
      if(isset($_GET['adminlogout'])){
         if($_GET['adminlogout']=='logout'){
            $obj->admin_logout();
         }
      }

  ?>



    <?php include_once('includes/head.php') ?>
    <body class="sb-nav-fixed">
        <?php  include_once('includes/topheader.php')  ?>
        <div id="layoutSidenav">
           <?php include_once('includes/sidenav.php') ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                    <?php

                    if(isset($view)){

                        if($view=="dashboard"){
                           
                           include("view/dash_view.php");          
                       }
                       elseif($view=="managepost"){
                           
                           include("view/manageposts_view.php");          
                       }
                       elseif($view=="addpost"){
                           
                           include("view/add_posts_view.php");          
                       }
                       elseif($view=="addcategory"){
                           
                           include("view/add_category_view.php");          
                       }
                       elseif($view=="managecategory"){
                           
                           include("view/managecategory_view.php");          
                       }
                       elseif($view=="editcategory"){
                         include("view/editcategory_view.php");
                       }
                       elseif($view=="editimg"){
                        include("view/editimg_view.php");
                       }
                       elseif($view=="editpost"){
                        include("view/editpost_view.php");
                       }
                         
                    }

                    ?>
                    </div>
                </main>
            </div>
        </div>
       <?php include_once('includes/footer.php') ?>
    </body>
</html>
