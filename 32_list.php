<?php
include '32_database.php';
$result = $conn->query("SELECT * FROM employees ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid black; padding: 10px; text-align: center; }
    </style>
</head>
<body>
    <h2 align="center">Employee Records</h2>
    <a href="32_record.php">+ Add New Employee</a>
    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Rank</th><th>Status</th>
            <th>Image</th><th>Created By</th><th>Updated By</th>
            <th>Created At</th><th>Updated At</th><th>Action</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['rank'] ?></td>
            <td><?= $row['status'] ?></td>
            <td><?php if ($row['image']) echo "<img src='4th Sem".$row['image']."' width='50'>"; ?></td>
            <td><?= $row['created_by'] ?></td>
            <td><?= $row['updated_by'] ?></td>
            <td><?= $row['created_at'] ?></td>
            <td><?= $row['updated_at'] ?></td>
            <td>
                <a href="32_update.php?id=<?= $row['id'] ?>">Edit</a> | 
                <a href="32_delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
