<?php require("header.php");
?>
<div class="col-md-8 col-sm-6 mx-auto">
    <?php
    $sql = "SELECT * FROM question ORDER BY views DESC LIMIT 0,12 ";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) : ?>
            <div>
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
                        <span class="badge">By <?php echo $row["username"]; ?>  <?php echo time_elapsed_string($row["created"]); ?></span>
                        </p>
                    </div>
                </a>
            </div>
    <?php endwhile;
    }
else 
{
   echo '<h1 style="height:100vh;" class="text-center mt-5 mx-auto" >No results were found</h1>';
}
    ?>
</div>
<?php include("footer.php"); ?>