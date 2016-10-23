<?php include("includes/header.php");
if(isset($_GET['post'])) {
  $id = mysqli_real_escape_string($db, $_GET['post']);
  $query = "SELECT * FROM posts WHERE id='$id'";
}

$posts = $db->query($query);
?>

        <br>

        <?php if($posts->num_rows > 0) {
          while($row = $posts->fetch_assoc()) {
          ?>
        <div class="blog-post">
          <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
          <p class="blog-post-meta"><?php echo $row['date']; ?> by <a href="#"><?php echo $row['author']; ?></a></p>

          <?php echo $row['body']; ?>
        </div><!-- /.blog-post -->
        <?php } } ?>

          <blockquote>2 Comments</blockquote>

          <div class="comment-area">
            <form>
              <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Website</label>
                <input type="text" name="website" class="form-control" id="exampleInputEmail1" placeholder="Website(Optional)">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Comment</label>
                <textarea cols="60" rows="10" name="comment" class="form-control" id="exampleInputPassword1"></textarea>
              </div>
              <button type="submit" name="post_comment" class="btn btn-primary">Post Comment</button>
            </form>

            <br>
            <br>
            <br>

            <div class="comment">
              <div class="comment-head">
                <a href="#">Town Chen</a><button class="btn btn-info btn-xs">Admin</button>
                <img width="50" height="50" src="img/original.jpg" />
              </div>
              This is a comment of town ,to test our website.
            </div>
            <div class="comment">
              <div class="comment-head">
                <a href="#">Town Chen</a>
                <img width="50" height="50" src="img/original.jpg" />
              </div>
              This is a comment of town ,to test our website.
            </div>
            <div class="comment">
              <div class="comment-head">
                <a href="#">Town Chen</a>
                <img width="50" height="50" src="img/original.jpg" />
              </div>
              This is a comment of town ,to test our website.
            </div>

          </div>

        </div><!-- /.blog-main -->

        <?php include("includes/sidebar.php"); ?>
        <?php include("includes/footer.php"); ?>
