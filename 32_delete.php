<?php
include '32_database.php';
$id = $_GET['id'];
$conn->query("DELETE FROM employees WHERE id=$id");
header("Location: 32_list.php");
?>
