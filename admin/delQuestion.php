<?php session_start(); ?>
<?php
if (!isset($_SESSION["admin"])) {
    header('location:index.php');
}
?>
<?php
include("../essentials/config.php");

$id = $_POST['id'];

$sql = "select * from question where id = '$id' ";

$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);

if ($num == 1) {

    $sql = mysqli_query($con, "DELETE FROM question WHERE id='$id'");
    echo "<script>
    alert('Question successfully deleted');
document.location='index.php';
</script>";
} else {
    echo "<script>
    alert('Some error occured! Please try again');
    document.location='index.php';
</script>";
}

?>