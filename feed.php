<?php require("header.php"); ?>
<?php
$result = mysqli_query($con, "SELECT DISTINCT(id) FROM history WHERE username = '$username' ORDER BY id DESC LIMIT 0,12");
if ($result === FALSE) {
    mysqli_close($con);
    echo '<h1 style="height:100vh;" class="text-center mt-5 mx-auto" >Nothing that we can suggest right now </h1>';
} else {
?>
    <div class="col-md-8 col-sm-6 mx-auto">
        <?php while ($row_product = mysqli_fetch_assoc($result)) :
            $id = $row_product['id'];
            $find_product_data = "SELECT * FROM question WHERE id = '$id' ";
            $found_product_data = $con->query($find_product_data);
            $row = $found_product_data->fetch_assoc();
            if ($row) {
        ?>

            <a href="addAnswer.php?id=<?php echo $row['id']; ?>">
                <div class="col-lg-12 my-5">

                    <span class="bagde questionDiv"><?php echo mb_strimwidth($row["content"], 0, 200, "..."); ?></span>

                    <p class="text-left mt-2">
                        <span class="badge badge-secondary"><?php echo $row["language"]; ?> </span>
                        <span class="badge badge-secondary"><?php echo $row["category"]; ?></span>
                        <span class="badge badge-secondary"><?php echo $row["duration"]; ?></span>
                        <span class="badge badge-info"><?php echo $row["views"]; ?> views</span>
                    </p>
                    <p class="text-left">
                        <span class="badge">By <?php echo $row["username"]; ?> <?php echo time_elapsed_string($row["created"]); ?></span>
                    </p>
                </div>
            </a>

        <?php 
    } else 
    {
       echo '<h1 style="height:100vh;" class="text-center mt-5 mx-auto" >No results were found</h1>';
    } endwhile; ?>

    </div>

<?php }
 ?>

<?php include("footer.php"); ?>