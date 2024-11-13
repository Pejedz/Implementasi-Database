<?php
include 'koneksi.php';
$username = $_POST['username'];
$comment = $_POST['comment'];
$query = mysqli_query($connect, "INSERT INTO data (username,comment) VALUES ('$username','$comment')");
if($query) {
    echo "<div class='alert alert-succes' style='text-align:center;'>Data Berhasil disimpan</div>";
} else {
    echo"<div class='alert alert-danger'>Upload Failed. Try Again. </div>";
}
?>