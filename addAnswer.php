<?php include("header.php");
$qid = $_GET['id'];
if (!$qid) {
  echo "<script>
    document.location='index.php';
    </script>";
}
$find_data = "SELECT * FROM question WHERE id = '$qid'";
$found_data = $con->query($find_data);
$question = $found_data->fetch_assoc();
$con->query("INSERT INTO history ( qid, username, created) VALUES ('$qid',  '$username', now())");
$con->query("UPDATE question SET views = views + 1 WHERE id = " . $qid);
?>
<div class="container">
  <div class="col-lg-12 my-4">
    <div class="mt-5">
      <span class="bagde questionDiv"><?php echo $question["content"]; ?></span>
      <p class="text-left mt-2">
        <span class="badge badge-secondary"><?php echo $question["language"]; ?> </span>
        <span class="badge badge-secondary"><?php echo $question["category"]; ?></span>
        <span class="badge badge-secondary"><?php echo $question["duration"]; ?></span>
        <span class="badge badge-info"><?php echo $question["views"]; ?> views</span>
      </p>
      <p class="text-left">
        <span class="badge">By <?php echo $question["username"]; ?> <?php echo time_elapsed_string($question["created"]); ?></span>
      </p>
    </div>
    <div class="col-lg-8 col-sm-6 mx-auto">
      <?php
      $sql = "SELECT * FROM answer where id = $qid ORDER BY created DESC";
      $result = $con->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) : ?>

          <div class="col-lg-12 my-5">

            <span class="bagde"><?php echo $row["content"]; ?></span>

            <p class="text-left">
              <span class="badge">By <?php echo $row["username"]; ?> <?php echo time_elapsed_string($row["created"]); ?></span>
            </p>
          </div>
      <?php endwhile;
      }
    

if (isset($_SESSION["loggedin"])) { ?>

    <script src="//cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
      <form name="addform" action="postAnswer.php" method="POST">
        <input type="hidden" name="qid" value="<?php echo $qid; ?>">
        <div class="justify-content-center">
          <textarea name="content" required>  </textarea>
          <script>
            CKEDITOR.replace('content');
          </script>
        </div>
        <button type="submit" name="submit" class="btn btn-success text-center mt-3">Post Your Answer</button>
    </div>
  </div>
  </form>

<?php } else { ?>
  <a class="btn btn-success text-center mt-3" href="login.php">Add Your Answer</a>
<?php }  ?>    
</div>
<?php include("footer.php"); ?>