<?php

  /**
   * 
   */
  class blogproject
  {
  	
  	private $conn;
  	
  	public function __construct()
  	{
  		$dbhost='localhost';
  		$dbuser='root';
  		$dbpass="";
  		$dbname="blogproject";

  		$this->conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

  		if(!$this->conn){
  			die("DB is not connected");
  		}
  	}

  	public function admin_login($data){
         $adminemail=$data['admin_email'];
         $adminpass=md5($data['admin_pass']);

         $query="SELECT * FROM admin_info WHERE admin_email='$adminemail' AND admin_pass='$adminpass'";

         if(mysqli_query($this->conn,$query)){
         	$adinfo=mysqli_query($this->conn,$query);//ekhane data array akare ase


         	if($adinfo){
         		header("location:dashboard.php");
         		$addata=mysqli_fetch_assoc($adinfo);//eta die amra data ta ke part by part venge fellam

         		session_start();//session start korlam

         		$_SESSION['admin_id']=$addata['id'];//'id' ta holo db te id field ta
         		$_SESSION['admin_name']=$addata['admin_name'];//'admin_name' holo db te admin_name field ta
         	}
         }
  	}

  	public function admin_logout(){
  		unset($_SESSION['admin_id']);
  		unset($_SESSION['admin_name']);
  		header('location:index.php');
  	}

    public function addcat($data){
       $catname=$data['cat_name'];
       $catdes=$data['cat_des'];

       $query="INSERT INTO category (name,des) VALUE ('$catname','$catdes')";
       if(mysqli_query($this->conn,$query)){
          return "Category Added Successfully";
       }
    }

    public function show_cat(){
      $query="SELECT * FROM category";
      if(mysqli_query($this->conn,$query)){
        $show_cat=mysqli_query($this->conn,$query);
        return $show_cat;
      }
    }

    public function delete_cat($id){
      $query="DELETE FROM category WHERE id=$id";

       if(mysqli_query($this->conn,$query)){
        return "Category Deleted Successfully";
      }

    }

    public function updateinitial($id){
      $query="SELECT * FROM category WHERE id=$id";
      if(mysqli_query($this->conn,$query)){
         $show_cat=mysqli_query($this->conn,$query);
         $splitinfo=mysqli_fetch_assoc($show_cat);
         return $splitinfo;
      }
    }

    public function updatefinal($data){
         $cataname=$data['ucat_name'];
         $catades=$data['cat_des'];
         $catid=$data['upid'];


         $query="UPDATE category SET name='$cataname',des='$catades' WHERE id=$catid";
         if(mysqli_query($this->conn,$query)){
          return "Info Updated Successfully";
         }
    }

    public function add_admin($data){
          $p_cat=$data['post_cat'];
          $p_title=$data['post_title'];
          $p_content=$data['post_content'];
          $p_sum=$data['post_sum'];
          $p_img=$_FILES['post_img']['name'];
          $p_img_tmp=$_FILES['post_img']['tmp_name'];
          $p_tag=$data['post_tag'];
          $p_status=$data['post_status'];


          $query= "INSERT INTO posts (post_cat,post_title,post_content,post_summary,post_img,post_tag,post_status,post_author,
          post_date,post_comment_count) VALUES ($p_cat,'$p_title','$p_content','$p_sum','$p_img','$p_tag',$p_status,'Admin',
          now(),3)" ;


          if(mysqli_query($this->conn,$query)){
            move_uploaded_file($p_img_tmp, '../upload/' .$p_img);
            return "Info added Successfully!!";
          }
    }

    public function alldplay(){
      $query="SELECT * FROM cat_post";
      if(mysqli_query($this->conn,$query)){
        $all=mysqli_query($this->conn,$query);
        return $all;
      }
    }

    public function alldplay_puborunpub(){
      $query="SELECT * FROM cat_post WHERE post_status=1";
      if(mysqli_query($this->conn,$query)){
        $all=mysqli_query($this->conn,$query);
        return $all;
      }
    }

    public function editimg($data){
      $id=$data['editid'];
      $imgname=$_FILES['editpost_img']['name'];
      $tmpname=$_FILES['editpost_img']['tmp_name'];

      $query="UPDATE posts SET post_img='$imgname' WHERE post_id=$id";

       if(mysqli_query($this->conn,$query)){
            move_uploaded_file($tmpname, '../upload/' .$imgname);
            return "Image Updated Successfully!!";
         }
    }

    public function updatetwoinfo($id){
        $query="SELECT * FROM cat_post WHERE post_id=$id";
        if(mysqli_query($this->conn,$query)){
           $allinfo=mysqli_query($this->conn,$query);
           $twoinfo=mysqli_fetch_assoc($allinfo);
           return $twoinfo;
      }
    }

    public function updatetwoinfo2($data){
      $finfo=$data['changepost_title'];
      $fcontent=$data['changepost_content'];
      $fid=$data['upid'];

      $query="UPDATE cat_post SET post_title='$finfo', post_content='$fcontent' WHERE post_id=$fid ";
      if(mysqli_query($this->conn,$query)){
          return "Info Updated Successfully";
         }
    }
  }


?>