<?php 
include 'edit.php';

$id = $_POST['id'];
$username = $_POST['username'];
$comment = $_POST['comment'];

$query = mysqli_query($connect, "UPDATE data SET username='$username', comment='$comment' WHERE id='$id'");
if($query) {
    echo "<div class='alert alert-succes' style='text-align:center;'>Data Berhasil Diubah</div>";
} else {
    echo "<div class='alert alert-danger'>Upload Failed. Try Again. </div>";
}
?>