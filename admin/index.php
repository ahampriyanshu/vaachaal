<?php require("header.php"); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-9 mx-auto my-4 text-center">
      <h2><span class="badge badge-dark">Manage User</span></h2> <a href="logout.php" class="m-2 btn btn-sm btn-danger">
        <i class="fas fa-sign-out-alt mr-2"></i><b>Logout</b></a>
    </div>


    <div class="col-lg-12 mx-auto mt-5">
      <div class="table-responsive">
        <table class='table table-borderless text-center'>
          <thead>
            <tr>

              <th id="ID">ID</th>
              <th id="USERNAME">USERNAME</th>
              <th id="STATUS">STATUS</th>
              <th id="FULL NAME">FULL NAME</th>
              <th id="MOBILE  ">MOBILE  </th>
              <th id="EMAIL">EMAIL</th>
              <th id="JOINED">JOINED</th>
              <th id="LOGIN">LOGIN</th>
              <th id="QUESTION">QUESTION</th>
              <th id="ANSWER">ANSWER</th>
              <th id="DEACTIVATE">DEACTIVATE</th>
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
            $query = "SELECT * FROM user ORDER BY uid DESC LIMIT $start_from, $per_page";
            $result = $con->query($query);
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) :
            ?>

                <tr>
                  <td>
                    <span class="badge  badge-light"><?php echo $row['uid'] ?></span>
                  </td>
                  <td>
                    <span class="badge  badge-light"><?php echo $row['username'] ?></span>
                  </td>
                  <td>
                                    <?php if ($row['status'] == 0) { ?>
                                        <span class="badge badge-warning">Unverified</span>

                                    <?php } else if ($row['status'] == 1) { ?>
                                        <span class="badge badge-success">Active</span>

                                    <?php } else if ($row['status'] == 2) { ?>
                                        <span class="badge badge-success">Unactive</span>

                                    <?php } else if ($row['status'] == 3) { ?>
                                        <span class="badge badge-info">Disabled</span>

                                    <?php } else {  ?>
                                        <span class="badge badge-danger">Error</span>
                                    <?php  } ?>
                                </td>
                  <td>
                    <span class="badge  badge-light"><?php echo $row['name'] ?></span>
                  </td>
                  <td>
                    <span class="badge  badge-light"><?php echo $row['phone'] ?></span>
                  </td>
                  <td>
                    <span class="badge  badge-light"><?php echo $row['email'] ?></span>
                  </td>
                  <td>
                    <span class="badge  badge-light"><?php echo time_elapsed_string($row['created']); ?></span>
                  </td>
                  <td>
                    <span class="badge  badge-light"><?php echo time_elapsed_string($row['last_login']); ?></span>
                  </td>
                  <td>
                                    <a href="manageQuestion.php?user=<?php echo $row['username'] ?>">
                                        <i class="fas fa-wrench"></i></a>
                                </td>
                                <td>
                                    <a href="manageAnswer.php?user=<?php echo $row['username'] ?>">
                                        <i class="fa fa-wrench"></i></a>
                                </td>

                  <form method="post" action="deactivateAccount.php">
                    <td>
                      <input class="btn btn-danger btn-sm" type="submit" value="Deactivate" />
                    </td>
                    <input type="hidden" name="username" value="<?php echo $row['username']; ?>" />
                  </form>

                </tr>
            <?php endwhile;
            } ?>
          </tbody>
        </table>
      </div>

      <?php
$query = "SELECT * FROM user ORDER BY uid DESC";
$result = mysqli_query($con, $query);
$total_posts = mysqli_num_rows($result);
$total_pages = ceil($total_posts / $per_page);
$page_url = $_SERVER['PHP_SELF'];

if ($total_posts)
{ 

echo "<div class='text-center'><div class='pagination justify-content-center'><a href ='$page_url?page=1'>First</a>";
for ($i = 1; $i <= $total_pages; $i++) : ?>
<a class="<?php if ($page == $i) 
{ echo 'active'; } ?>" href="<?php echo $page_url ?>?page=<?= $i; ?>"> <?= $i; ?> </a>
<?php endfor;
echo "<a href='$page_url?page=$total_pages'>Last</a></div></div>";
} else 
{
   echo '<h1 style="height:100vh;" class="text-center mt-5 mx-auto" >No results were found</h1>';
}
?>

    </div>
    
  </div>
</div>

  
<?php include("footer.php"); ?>