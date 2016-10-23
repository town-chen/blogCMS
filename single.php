<?php include("includes/header.php"); ?>

        <br>

          <div class="blog-post">
            <h1 class="blog-post-title">Sample blog post</h1>
            <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

            <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
            <hr>
            <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
            <blockquote>
              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </blockquote>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            <h2>Heading</h2>
            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
            <h3>Sub-heading</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
            <pre><code>Example code block</code></pre>
            <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
            <h3>Sub-heading</h3>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <ul>
              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
              <li>Donec id elit non mi porta gravida at eget metus.</li>
              <li>Nulla vitae elit libero, a pharetra augue.</li>
            </ul>
            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
            <ol>
              <li>Vestibulum id ligula porta felis euismod semper.</li>
              <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
              <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
            </ol>
            <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
          </div><!-- /.blog-post -->

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
