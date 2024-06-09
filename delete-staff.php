<?php
include_once("./connection.php");
$id = $_GET["id"];
$query=mysqli_query($db,"DELETE FROM staff WHERE id=$id");

header("Location: staff.php");
?>