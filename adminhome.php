<?php require("adminpanel.php"); ?>
    <?php
    $sql = "SELECT * FROM user";
    $result = $con->query($sql);
    if ($result->num_rows > 0)
    while($row = $result->fetch_assoc()) :?>
    <form method="post" action="verify.php">
      <div class="userinfo">
        <img class="admincircle" src="img/user.png"  title="logo" width="150px" height="145px" style="position: relative;" border=""/>
        <table id="table" border="0px" cellpadding="6px" cellspacing="0">
          <tr>
            <td><span id="specs">User ID</span></td>
            <td><span id="details"><?php echo $row["uid"]; ?></span></td>
          </tr>
          <tr>
            <td><span id="specs">Username</span></td>
            <td><span id="details"><?php echo $row["username"]; ?></span></td>
          </tr>
          <tr>
            <td><span id="specs">Full Name</span></td>
            <td><span id="details"><?php echo $row["name"]; ?></span></td>
          </tr>
          <tr>
            <td><span id="specs">Mobile</span></td>
            <td><span id="details"> <?php echo $row["phone"]; ?></span></td>
          </tr>
          <tr>
            <td><span id="specs">E-mail</span></td>
            <td><span id="details"> <?php echo $row["email"]; ?></span></td>
          </tr>
          <tr>
            <td><span id="specs">Joined</span></td>
            <td><span id="details"><?php echo $row["created"]; ?></span></td>
          </tr>
        </table>
        <div class="setting_admin" >
          <img  id="set" src="img/lock.png" onmouseover="this.src='img/unlock.png';" onmouseout="this.src='img/lock.png';"
          width="300px" height="300px" border="none" style="position: absolute; top:-2%; left:18%;"   />
          <input type="hidden" name="user" value="<?php echo $row['username']; ?>"/>
          <input style="position:relative; top:320px; right:-35%;" type="submit" id="verify" value="Modify User Information" />
        </div>
      </div>
    </form>
    
    <br><br><br><br>
    <?php endwhile; ?>
  </div>
<?php include("footer.php"); ?>