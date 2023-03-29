<?php 

 $everything=$obj->alldplay();
 
 ?>



<h1>Add Manage Post</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Post Title</th>
      <th scope="col">Post Content</th>
      <th scope="col">Image</th>
      <th scope="col">Category</th>
      <th scope="col">Summary</th>
      <th scope="col">Tag</th>
      <th scope="col">Status</th>
      <th scope="col">Author</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	<?php while($splitinfo=mysqli_fetch_assoc($everything)){ ?>
    <tr>
      <td><?php echo $splitinfo['post_id']; ?></td>
      <td><?php echo $splitinfo['post_title']; ?></td>
      <td><?php echo $splitinfo['post_content']; ?></td>
      <td><img height="100px" src="../upload/<?php echo $splitinfo['post_img']; ?>">
       <a href="edit_img.php?status=edit&&id=<?php echo $splitinfo['post_id']; ?>">Change</a>
      </td>
      <td><?php echo $splitinfo['name']; ?></td>
      <td><?php echo $splitinfo['post_summary']; ?></td>
      <td><?php echo $splitinfo['post_tag']; ?></td>
      <td><?php if($splitinfo['post_status']==1){echo "Published";}
                 else {echo "Unpublished";}

       ?></td>
      <td><?php echo $splitinfo['post_author']; ?></td>
      <td><?php echo $splitinfo['post_date']; ?></td>
      <td>
      	<a href="edit_post.php?status=editpost&&id=<?php echo $splitinfo['post_id']; ?>" class="btn btn-success">Edit</a>
      	<a href="#" class="btn btn-danger">Delete</a>
      </td>
      
    </tr>
    <?php } ?>
  </tbody>
</table>