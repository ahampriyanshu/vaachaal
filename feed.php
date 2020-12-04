<?php require("header.php");

    $feed = mysqli_query($con, "SELECT DISTINCT(qid) FROM history WHERE username = '$username' ORDER BY product_id DESC LIMIT 0,12");
    if($feed === FALSE){
        mysqli_close($con);
        echo '<h1 class="text-center mx-auto" > Nothing we can suggest right now </h1>';
}
else {

?>

<div class="col-md-8 col-sm-6 mx-auto">
    <?php
     $feed_result = mysqli_fetch_assoc($result);
        $qid = $feed_result['qid'];
    $sql = "SELECT * FROM question where id = $qid ORDER BY created DESC ";
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
    ?>
</div>

<?php include("footer.php");
} ?>