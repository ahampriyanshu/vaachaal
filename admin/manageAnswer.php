<?php include("header.php");
if (!isset($_SESSION["admin"])) {
  header('location: index.php');
}
$username = $_GET['user'];
if (!$username) {
  echo "<script>
    document.location='index.php';
    </script>";
}
?>

<div class="container">
  <div class="row">
    <div class="col-lg-9 mx-auto my-4 text-center">
      <h2><span class="badge badge-dark">Manage Answer</span></h2>
      <a href="logout.php" class="m-2 btn btn-sm btn-danger">
        <i class="fas fa-sign-out-alt mr-2"></i><b>Logout</b></a>
    </div>


    <div class="col-lg-9 mx-auto mt-5">
      <div class="table-responsive">
        <table class='table table-borderless text-center'>
          <thead>
            <tr>

              <th id="ANSWER">ANSWER</th>
              <th id="QUESTION">QUESTION</th>
              <th id="TIME">TIME</th>
              <th id="DELETE">DELETE</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $per_page = 12;

            if (isset($_GET['page'])) {
              $page = $_GET['page'];
            } else {
              $page = 1;
            }

            $start_from = ($page - 1) * $per_page;
            $query = "SELECT * FROM answer WHERE username = '$username' ORDER BY created DESC LIMIT $start_from, $per_page";
            $result = $con->query($query);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) :
            ?>

                <tr>

                  <td>
                    <span class="text-left badge  badge-light"><?php echo  mb_strimwidth($row["content"], 0, 30, "..."); ?></span>
                  </td>

                <?php 
                $id = $row['id'];
                $query2 = "SELECT content FROM question WHERE id = $id ";
                $result2 = $con->query($query2);
                $row2 = $result2->fetch_assoc();

                if($row2) { 
                ?>

                  <td>
                    <span class="text-left badge badge-light"><?php echo  mb_strimwidth($row2["content"], 0, 30, "..."); ?></span>
                  </td>

                <?php } else { 
                  echo '<td><span class="text-left badge badge-light">Question has been removed</span></td>';
                }?>

                  <td>
                    <span class="badge badge-light"><?php echo time_elapsed_string($row["created"]); ?></span>
                  </td>

                  <form method="post" action="delAnswer.php">
                    <td>
                      <input class="btn btn-danger btn-sm" type="submit" id="answer_button" value="Delete" />
                    </td>
                    <input type="hidden" name="aid" value="<?php echo $row['aid']; ?>" />
                  </form>
                </tr>
            <?php endwhile;
            } ?>
          </tbody>
        </table>
      </div>

      <?php
      $query = "SELECT * FROM answer WHERE username = '$username' ORDER BY created DESC";
      $result = mysqli_query($con, $query);
      $total_posts = mysqli_num_rows($result);
      $total_pages = ceil($total_posts / $per_page);
      $page_url = $_SERVER['PHP_SELF'];
      if ($total_posts)
{ 
      echo "<div class='text-center'><div class='pagination justify-content-center'><a href ='$page_url?page=1'>First</a>";
      for ($i = 1; $i <= $total_pages; $i++) : ?>
        <a class="<?php if ($page == $i) {
                    echo 'active';
                  } ?>" href="<?php echo $page_url ?>?page=<?= $i; ?>"> <?= $i; ?> </a>
      <?php endfor;
      echo "<a href='$page_url?page=$total_pages'>Last</a></div></div>";} else 
      {
         echo '<h1 \ class="text-center mt-5 mx-auto" >No results were found</h1>';
      }
      ?>
    </div>
  </div>
</div>
<?php include("footer.php"); ?>