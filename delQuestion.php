<?php include("header.php");
if (!isset($_SESSION["loggedin"])) {
  header('location: index.php');
}
?>

<div class="container">
  <div class="row">
    <div class="col-lg-9 mx-auto my-4 text-center">
      <h2><span class="badge badge-dark">Manage Account</span></h2>
    </div>
    <div class="mx-auto text-center">
      <a href="addQuestion.php" class="m-2 btn btn-sm btn-success">
        <i class="fa fa-plus-square mr-2"></i> <b>Add New Question</b></a>

      <a href="delQuestion.php" class="m-2 btn btn-sm btn-warning">
        <i class="far fa-trash-alt mr-2"></i><b>Delete Question</b></a>

      <a href="delAnswer.php" class="m-2 btn btn-sm btn-warning">
        <i class="far fa-trash-alt mr-2"></i><b>Delete Answer</b></a>

      <a href="updateUsername.php" class="m-2 btn btn-sm btn-info">
        <i class="fa fa-wrench mr-2"></i> <b>Change Username</b></a>

      <a href="updateMobile.php" class="m-2 btn btn-sm btn-info">
        <i class="fa fa-wrench mr-2"></i> <b>Change Mobile</b></a>

      <a href="delAccount.php" class="m-2 btn btn-sm btn-danger">
        <i class="far fa-trash-alt mr-2"></i> <b>Deactivate Account</b></a>
    </div>

    <div class="col-lg-12 mx-auto mt-5">
                    <div class="table-responsive">
                        <table class='table table-borderless text-center'>
                            <thead>
                                <tr>
                                   
                                    <th id="CONTENT" >CONTENT</th>
                                    <th id="CATEGORY" >CATEGORY</th>
                                    <th id="LANG" >LANG</th>
                                    <th id="DURATION" >DURATION</th>
                                    <th id="TIME" >TIME</th>
                                    <th id="DELETE" >DELETE</th>
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

$start_from = ($page-1) * $per_page;

$username = $_SESSION["loggedin"];
$query = "SELECT * FROM question WHERE username = '$username' ORDER BY created DESC LIMIT $start_from, $per_page";
$result = $con->query($query);
  if ($result->num_rows > 0) { 
    while ($row = $result->fetch_assoc()) :
                                ?>

                                    <tr>
                                        
                                        <td>
                                            <span class="badge  badge-light"><?php echo $row['content'] ?></span>
                                        </td>
                                        <td>
                                            <span class="badge  badge-light"><?php echo $row['category'] ?></span>
                                        </td>
                                        <td>
                                            <span class="badge  badge-light"><?php echo $row['language'] ?></span>
                                        </td>
                                        <td>
                                            <span class="badge  badge-light">&#x20B9;&nbsp;<?php echo $row['duration'] ?></span>
                                        </td>
                                        <td>
                                            <span class="badge  badge-light"><?php echo $row['created'] ?></span>
                                        </td>
                            
                                        <td>
                                        <form method="post" action="delquebyuser.php"><br>
        <input type="submit" id="answer_button" value="Delete" >
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
      </form>
                                        </td>
                                    </tr>
                                    <?php endwhile;
            } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

  </div>
</div>
<?php include("footer.php"); ?>