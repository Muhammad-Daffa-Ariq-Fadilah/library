<?php
include_once("./connection.php");

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $email = $_POST["email"];
    
    $query = mysqli_query($db, "INSERT INTO staff VALUES (
        NULL, '$nama', '$telp', '$email'
    )");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Staff</title>
</head>
<body>
    <h1>Tambah Data Staff</h1>
    <form method="POST">
        <label for="nama">NAMA</label>
        <input type="text" id="nama" name="nama">
        <br>
        <br>
        <label for="telp">TELP</label>
        <input type="text" id="telp" name="telp">
        <br>
        <br>
        <label for="email">EMAIL</label>
        <input type="text" id="email" name="email">
        <br>
        <br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
    <br>
    <a href="./staff.php">Kembali ke daftar staff</a>
</body>
</html>
