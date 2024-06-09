<?php
include_once("./connection.php");

$id = $_GET["id"];
$query_get_data = mysqli_query($db, "SELECT * FROM staff WHERE id=$id");
$staff = mysqli_fetch_assoc($query_get_data);
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $email = $_POST["email"];
    
    $query = mysqli_query($db, "UPDATE staff SET nama='$nama', telp='$telp', email='$email' WHERE id=$id");
} ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Staff</title>
</head>
<body>
    <h1>Edit Data Staff</h1>
    <form method="POST">
        <label for="nama">Nama</label>
        <input value="<?php echo $staff['nama']; ?>" type="text" id="nama" name="nama">


        <br>
        <br>

        <label for="telp">telp</label>
        <input value="<?php echo $staff['telp']; ?>" type="text" id="telp" name="telp">

        <br>
        <br>

        <label for="email">email</label>
        <input value="<?php echo $staff['email']; ?>" type="text" id="email" name="email">
        <br>
        <br>
        <button type="submit" name="submit">UPDATE</button>
    </form>
    <a href="./staff.php">Kembali ke daftar staff</a>
</body>
</html>
