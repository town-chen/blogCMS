<?php
include("includes/header.php");
include("includes/sidebar.php");

 ?>


           <h1 class="page-header">Posts</h1>
           <a href="new_post.php" class="btn btn-info btn-lg">Add New</a>

           <div class="table-responsive">
             <form method="post">
             <table class="table table-striped">
               <thead>
                 <tr>
                   <th>Select</th>
                   <th>Date Posted</th>
                   <th>Title</th>
                   <th>Author</th>
                   <th>Tags</th>
                   <th>Category</th>
                   <th>Edit</th>
                 </tr>
               </thead>
               <tbody>
                 <tr>
                   <td><input type="checkbox" name="checkbox[]" /></td>
                   <td>1,001</td>
                   <td>Lorem</td>
                   <td>town</td>
                   <td>php</td>
                   <td>php</td>
                   <td><a href="#" class="btn btn-warning">Edit</a></td>
                 </tr>
                 <tr>
                   <td><input type="checkbox" name="checkbox[]" /></td>
                   <td>1,001</td>
                   <td>Lorem</td>
                   <td>town</td>
                   <td>php</td>
                   <td>php</td>
                   <td><a href="#" class="btn btn-warning">Edit</a></td>
                 </tr>

               </tbody>
             </table>

             <select name="action">
               <option>Delete</option>
               <option>Clone</option>
             </select>

             <button type="submit" name="apply" class="btn btn-primary">Apply</button>
           </form>
           </div>


         </div>
       </div>
     </div>

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
