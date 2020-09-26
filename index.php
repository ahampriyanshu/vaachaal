<?php require("header.php"); ?>
<div class="container">
    <?php
    $sql = "SELECT id,content,level,tym,branch,username,datetym FROM questions ORDER BY datetym DESC";
    $result = $con->query($sql);
    if ($result->num_rows > 0)
        while ($row = $result->fetch_assoc()) : ?>
        <button class="collapsible btn">
            <span id="title"><?php echo $row["content"]; ?></span><br>
            <hr id="line"><br>
            <span id="specs">Asked by </span>&nbsp;<span id="details"><?php echo $row["username"]; ?></span> &emsp;
            <span id="specs">time alloted is</span> &nbsp;<span id="details"><?php echo $row["tym"]; ?></span> &emsp;
            <span id="specs">difficulty level estimated is</span>&nbsp;&nbsp;<span id="details"><?php echo $row["level"]; ?></span> &emsp;
            <span id="specs">question comes under</span> &nbsp;<span id="details"><?php echo $row["branch"]; ?></span><span id="specs"> branch</span>&emsp;
            <span id="specs">posted on</span> &nbsp;<span id="details"><?php echo $row["datetym"]; ?></span><br>
            <form method="post" action="addans.php"><br>
                <input type="submit" id="answer_button" value="Have a better answer?" />
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
            </form>
        </button>
    <?php
            echo '<div class="content">';
            $queid = $row["id"];
            $ql = "SELECT * FROM answers WHERE id = '$queid' ORDER BY datetym DESC ";
            $resul = $con->query($ql);
            if ($resul->num_rows > 0) {
                while ($ro = $resul->fetch_assoc()) {
                    echo "<br><div id='answer_box'>
                <span id='anstitle'><br> " . $ro["content"] . "</span><br><span id='specs'> <br>&emsp;&emsp;&emsp;Time required is </span>&nbsp;<span id='details'> " . $ro["tym"] . "&emsp;&emsp;<span id='specs'> Difficulty Level according to user is </span>&nbsp; " . $ro["level"] . "&emsp;&emsp;<span id='specs'> Answered by </span>&nbsp; " . $ro["username"] . "&emsp;&emsp;<span id='specs'> answered on </span>&nbsp; " . $ro["datetym"] . "</span></div>";
                }
            } else {
                echo "<br><div id='answer_box'><span id='anstitle'>Be the first to answer</span></div>";
            }
            echo '<br><br></div>';
        endwhile; ?>
    <button onclick="topFunction()" id="top_button_index" title="Go to top">UP</button>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;
        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }

        var mybutton = document.getElementById("top_button_index");
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <br><br>
    </div>
</body>
</html>