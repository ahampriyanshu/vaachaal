<?php include("header.php");
if (!isset($_SESSION["loggedin"])) {
  header('location: login.php');
}
$qid = $_GET['id'];
if (!$qid) {
  echo "<script>
    document.location='index.php';
    </script>";
}
$find_data = "SELECT * FROM question WHERE id = '$qid'";
$found_data = $con->query($find_data);
$array = $found_data->fetch_assoc();
$username = $array['username'];
$duration = $array['duration'];
$category = $array['category'];
$language = $array['language'];
$con->query("INSERT INTO history ( id, username, category, language, duration, created) VALUES ('$qid', '$username', '$category', '$language ','$duration', 'now()')");
$con->query("UPDATE question SET views = views + '1' WHERE id = " . $qid);
?>
<div class="container">
  <div class="col-lg-12 my-4">
    <?php
    $sql = "SELECT id,content,category,duration,language,username,created FROM question WHERE id = '$qid'";
    $result = $con->query($sql);
    if ($result->num_rows > 0)
     { while ($row = $result->fetch_assoc()) : ?>
      <div class="mt-5">
        <span style=" font-family: Courier New;" ><?php echo $row["content"]; ?></span><br>
        <p class="text-center"><span class="badge badge-light"> Asked by <?php echo $row["username"]; ?> on <?php echo $row["created"]; ?>
          </span></p>
        <p class="text-center"><span class="badge badge-light"> Tags</span>
          <span class="badge badge-info"><?php echo $row["language"]; ?> </span>
          <span class="badge badge-light"><?php echo $row["category"]; ?></span>
          <span class="badge badge-secondary"><?php echo $row["duration"]; ?></span>
        </p>
      </div>
    <?php
      endwhile; }
    ?>
    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
    <div class="col-lg-12 text-center">
      <form name="addform" action="postAnswer.php" method="POST">
        <input type="hidden" name="qid" value="<?php echo $qid; ?>">
        <div class="justify-content-center">
          <textarea name="content" required>  </textarea>
          <script>
            CKEDITOR.replace('content');
          </script>
        </div>
    </div>

    <div class="container my-4">
      <div class="row">
        <div class="col-sm">
          <button type="submit" name="submit" class="btn btn-success">Post Your Answer</button>
        </div>
      </div>
    </div>
  </div>
  </form>
</div>
</div>
</div>
</div>
</div>
</body>
</html>