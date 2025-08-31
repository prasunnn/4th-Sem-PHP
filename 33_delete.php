<?php
include '33_database.php';
$id = $_GET['id'];
$conn->query("DELETE FROM courses WHERE id=$id");
header("Location: 33_list.php");
?>
