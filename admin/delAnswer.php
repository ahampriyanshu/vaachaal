<?php session_start(); ?>
<?php
if (!isset($_SESSION["admin"])) {
    header('location:index.php');
}
?>
<?php
include("../essentials/config.php");

$aid = $_POST['aid'];

$sql  = "select * from answer where aid = '$aid' ";

$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);

if ($num == 1) {

    $sql = mysqli_query($con, "DELETE FROM answer WHERE aid='$aid'");
    echo "<script>
    alert('Answer successfully deleted');
document.location='index.php';
</script>";
} else {
    echo "<script>
    alert('Some error occured! Please try again');
    document.location='index.php';
</script>";
}

?>