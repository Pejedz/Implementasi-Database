<?php 
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>UPDATE SISWA</h1>
    <?php 
    include "koneksi.php";
    $query = mysqli_query($connect, "SELECT * FROM data");
    while ($data = mysqli_fetch_array($query)) {
    ?>

    <form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        <input type="text" name="username" value="<?php echo $data['username']; ?>">
        <input type="text" name="comment" value="<?php echo $data['comment']; ?>">
        <button type="submit" name="update">UPDATE</button>
    </form> <?php } ?>
</body>
</html>