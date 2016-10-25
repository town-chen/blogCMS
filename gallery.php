<?php
include("includes/config.php");
include("includes/db.php");



$page_title = " Gallery Page";

include("includes/header.php");

?>
      <div class="row">
        <h2>Lightbox image gallery</h2>
        <!-- The container for the list of example images -->
        <div id="links" class="links">
          <a href="images/_MG_0091.jpg" title="Banana">
                <img src="images/_MG_0091.jpg" alt="Banana">
            </a>
            <a href="images/_MG_0140.jpg" title="Apple">
                <img src="images/thumbs/_MG_0140.jpg" alt="Apple">
            </a>
            <a href="images/_MG_0348.jpg" title="Orange">
                <img src="images/thumbs/_MG_0348.jpg" alt="Orange">
            </a>
            <a href="images/_MG_0464.jpg" title="Orange">
                <img src="images/thumbs/_MG_0464.jpg" alt="Orange">
            </a>
        </div>
        <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
        <div id="blueimp-gallery" class="blueimp-gallery">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>

        <script src="js/blueimp-helper.js"></script>
        <script src="js/blueimp-gallery.js"></script>
        <script>
        document.getElementById('links').onclick = function (event) {
            event = event || window.event;
            var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        };
        </script>

        <script src="js/blueimp-gallery-fullscreen.js"></script>
        <script src="js/blueimp-gallery-indicator.js"></script>
        <script src="js/blueimp-gallery-video.js"></script>
        <script src="js/blueimp-gallery-vimeo.js"></script>
        <script src="js/blueimp-gallery-youtube.js"></script>
        <script src="js/vendor/jquery.js"></script>
        <script src="js/jquery.blueimp-gallery.js"></script>


        <?php include("includes/footer.php"); ?>
