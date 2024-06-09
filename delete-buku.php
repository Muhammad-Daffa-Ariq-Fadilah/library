<?php
include_once("./connection.php");
$id = $_GET["id"];
$query=mysqli_query($db,"DELETE FROM buku WHERE id=$id");

header("Location: buku.php");
?>