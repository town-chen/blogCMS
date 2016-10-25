<?php
include("includes/config.php");
include("includes/db.php");

$query = "SELECT * FROM gallery";


$galleries = $db->query($query);



$page_title = " Gallery List Page";

include("includes/header.php");

?>

  <div class="row">
    <?php if($galleries->num_rows > 0) {
      while($row = $galleries->fetch_assoc()) {
      ?>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <?php
        $poster = $row['poster'];
        $poster_tmp = str_replace("\\", "/", $poster);
        $file_path = "file:///" . $poster_tmp;
      ?>
      <!-- <img src="<?php echo $file_path; ?>" alt="..."> -->
      <img src="E:/Downloads/GAS-347/GAS-347.jpg" />
      <div class="caption">
        <h3><?php echo $row['title']; ?></h3>
        <p><?php echo $row['description']; ?></p>
        <p><a href="#" class="btn btn-primary" role="button">More</a></p>
      </div>
    </div>
  </div>
  <?php } } else {
    echo "<p>No Matching Posts!!</p>";
  }
  ?>







        <?php include("includes/footer.php"); ?>
