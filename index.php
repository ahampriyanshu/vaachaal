<?php require("header.php"); 
$per_page = 12;

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$start_from = ($page-1) * $per_page;
?>

<div class="col-md-8 col-sm-6 mx-auto">
    <?php
    $sql = "SELECT id,content,category,duration,language,username,created FROM question ORDER BY created DESC LIMIT $start_from, $per_page";
    $result = $con->query($sql);
    if ($result->num_rows > 0)
    { 
        while ($row = $result->fetch_assoc()) : ?>
        <div>
        <a href="question.php?id=<?php echo $row['id']; ?>">
            <div class="col-lg-12 my-5">
                <span class="bagde questionDiv"><?php echo mb_strimwidth($row["content"], 0, 200, "..."); ?></span>
                <!-- <p class="text-right"><span class="badge badge-light"> Asked by <?php echo $row["username"]; ?> on <?php echo $row["created"]; ?>
                    </span></p> -->
                    <p class="text-left">
                       
          <span class="badge badge-secondary"><?php echo $row["language"]; ?> </span>
          <span class="badge badge-secondary"><?php echo $row["category"]; ?></span>
          <span class="badge badge-secondary"><?php echo $row["duration"]; ?></span>
                    </p>
                     <p class="text-right" >
                        <span class="badge badge-light"><?php echo $row["username"]; ?> </span>
          <span class="badge badge-light"><?php echo $row["created"]; ?></span>
                
        </p>
            </div>
        </a>
        </div>
    <?php endwhile; 
    }
    ?>
</div>

<?php
$query = "SELECT * FROM question";
$result = mysqli_query($con, $query);
$total_posts = mysqli_num_rows($result);
$total_pages = ceil($total_posts / $per_page);
$page_url = $_SERVER['PHP_SELF'];


echo "<div class='text-center'><div class='pagination justify-content-center'><a href ='$page_url?page=1'>First</a>";

for ($i = 1; $i <= $total_pages; $i++) : ?>

	<a class="<?php if ($page == $i) {
					echo 'active';
				} ?>" href="<?php echo $page_url ?>?page=<?= $i; ?>"> <?= $i; ?> </a>

<?php endfor;
echo "<a href='$page_url?page=$total_pages'>Last</a></div></div>";
?>

<?php include("footer.php"); ?>