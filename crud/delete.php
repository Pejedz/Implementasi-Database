<?php 
include "koneksi.php";
$id = $_GET['id'];
$sql = $connect->query("SELECT * from data WHERE id='$id'");
$data = $sql->fetch_assoc();
$query = $connect->query("DELETE from data where id='$id'");
if ($query) {
    header("location:../Message.php");
} else {
    header("location:../Message.php");
}

?>