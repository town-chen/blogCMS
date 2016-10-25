<?php
include("includes/header.php");
include("includes/sidebar.php");

 ?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
           <h1 class="page-header">Add New Category</h1>


           <div class="table-responsive">
             <form method="post">

               <div class="form-group">
                 <label for="category">
                   category:
                 </label>
                 <input class="form-control" type="text" name="category" id="category" />
               </div>


             <button type="submit" name="add_category" class="btn btn-default">Add Category</button>
           </form>
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
