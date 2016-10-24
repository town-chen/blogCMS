<?php
include("includes/header.php");
include("includes/sidebar.php");

 ?>


           <h1 class="page-header">Add New Post</h1>


           <div class="table-responsive">
             <form method="post">

               <div class="form-group">
                 <label>
                   Post Title:
                 </label>
                 <input class="form-control" type="text" name="title" />
               </div>
               <div class="form-group">
                 <label>
                   Post Author:
                 </label>
                 <input class="form-control" type="text" name="author" />
               </div>
               <div class="form-group">
                 <label>
                   Post Category:
                 </label>
                 <select class="form-control" name="category">
                   <option>PHP</option>
                   <option>Symfony</option>
                   <option>Laravel</option>
                 </select>
               </div>
               <div class="form-group">
                 <label>
                   Post Body:
                 </label>
                 <textarea name="body" class="form-control"></textarea>
               </div>
               <div class="form-group">
                 <label>
                   Post Keywords:
                 </label>
                 <input class="form-control" type="text" name="keywords" />
               </div>


             <button type="submit" name="add_post" class="btn btn-default">Add Post</button>
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
