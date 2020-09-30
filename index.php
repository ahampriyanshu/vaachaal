<?php require("header.php"); ?>
<div class="container">
    <?php
    $sql = "SELECT id,content,category,duration,language,username,created FROM question ORDER BY created DESC";
    $result = $con->query($sql);
    if ($result->num_rows > 0)
        while ($row = $result->fetch_assoc()) : ?>
<a  href="question.php?id=<?php echo $row['id']; ?>">
        <div class="col-lg-12 my-5">
        <span class="bagde "><?php echo $row["content"]; ?></span>
        <p class="text-right"><span class="badge badge-light"> Asked by <?php echo $row["username"]; ?> on <?php echo $row["created"]; ?>
        </span></p>
        </div>
</a>
    <?php endwhile; ?>
 
    <br><br>
    </div>
    </div>
</body>
</html>