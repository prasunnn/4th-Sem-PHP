<?php
include '33_database.php';
$result = $conn->query("SELECT * FROM courses ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head><title>Course List</title></head>
<body>
    <h2>Course List</h2>
    <a href="33_create.php">+ Add Course</a> | <a href="33_student-list.php">View Students</a>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th><th>Title</th><th>Duration</th><th>Status</th>
            <th>Created</th><th>Updated</th><th>Action</th>
        </tr>
        <?php while($row=$result->fetch_assoc()){ ?>
        <tr>
            <td><?= $row['id']?></td>
            <td><?= $row['title']?></td>
            <td><?= $row['duration']?></td>
            <td><?= $row['status']?></td>
            <td><?= $row['created_at']?></td>
            <td><?= $row['updated_at']?></td>
            <td>
                <a href="33_update.php?id=<?= $row['id']?>">Edit</a> |
                <a href="33_delete.php?id=<?= $row['id']?>" onclick="return confirm('Delete this course?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
