<?php
include("includes/config.php");
include("includes/db.php");

include("includes/header.php");
include("includes/sidebar.php");

$query = "SELECT * FROM posts ORDER BY id DESC";

$posts = $db->query($query);

$com_query = "SELECT * FROM comments ORDER BY id DESC";

$comments = $db->query($com_query);

$cat_query = "SELECT * FROM categories ORDER BY id DESC";
$categories = $db->query($cat_query);

 ?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
           <h1 class="page-header">Dashboard</h1>



           <h2 class="sub-header">Recent Posts</h2>
           <div class="table-responsive">
             <table class="table table-striped">
               <thead>
                 <tr>
                   <th>Date Posted</th>
                   <th>Title</th>
                   <th>Author</th>
                   <th>Actions</th>
                 </tr>
               </thead>
               <tbody>
                 <?php while ($row = $posts->fetch_assoc()) { ?>
                 <tr>
                   <td><?php echo $row['date'] ?></td>
                   <td><?php echo $row['title'] ?></td>
                   <td><?php echo $row['author'] ?></td>
                   <td><a href="new_post.php?post=<?php echo $row['id'] ?>" class="btn btn-warning">Edit</a>
                     <a href="index.php?entity=post&action=delete&id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a></td>
                 </tr>
                 <?php } ?>

               </tbody>
             </table>
           </div>

           <h2 class="sub-header">Recent Comments</h2>
           <div class="table-responsive">
             <table class="table table-striped">
               <thead>
                 <tr>
                   <th>Name</th>
                   <th>Comment</th>
                   <th>Actions</th>
                 </tr>
               </thead>
               <tbody>
                 <?php while ($com_row = $comments->fetch_assoc()) { ?>
                 <tr>
                   <td><?php echo $com_row['name'] ?></td>
                   <td><?php echo $com_row['comment'] ?></td>
                   <td><a href="#" class="btn btn-success">Approve</a>
                     <a href="#" class="btn btn-danger">Delete</a></td>
                 </tr>
                 <?php } ?>

               </tbody>
             </table>
           </div>

           <h2 class="sub-header">Recent Categories</h2>
           <div class="table-responsive">
             <table class="table table-striped">
               <thead>
                 <tr>
                   <th>ID</th>
                   <th>Title</th>
                   <th>Actions</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <td>1,001</td>
                   <td>Lorem</td>
                   <td><a href="#" class="btn btn-warning">Edit</a>  <a href="#" class="btn btn-danger">Delete</a></td>
                 </tr>

               </tbody>
             </table>
           </div>

         </div>  <!-- end main -->
       </div> <!-- end row -->
     </div> <!-- end container -->

     <!-- Bootstrap core JavaScript
     ================================================== -->
     <!-- Placed at the end of the document so the pages load faster -->
     <script src="js/jquery/1.12.4/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
     <script src="js/vendor/holder.min.js"></script>
     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
     <script src="js/ie10-viewport-bug-workaround.js"></script>
   </body>
 </html>
