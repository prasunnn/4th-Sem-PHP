<?php
include '33_database.php';
$sql = "SELECT s.*, c.title as course_title FROM students s 
        LEFT JOIN courses c ON s.course_id = c.id ORDER BY s.id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head><title>Student List</title></head>
<body>
    <h2>Student List</h2>
    <a href="33_student.php">+ Add Student</a> | <a href="33_list.php">View Courses</a>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th><th>Name</th><th>Course</th><th>Fee</th>
            <th>Roll No</th><th>Phone</th><th>Address</th><th>DOB</th>
            <th>Status</th><th>Created</th><th>Updated</th><th>Action</th>
        </tr>
        <?php while($row=$result->fetch_assoc()){ ?>
        <tr>
            <td><?= $row['id']?></td>
            <td><?= $row['name']?></td>
            <td><?= $row['course_title']?></td>
            <td><?= $row['fee']?></td>
            <td><?= $row['rollno']?></td>
            <td><?= $row['phone']?></td>
            <td><?= $row['address']?></td>
            <td><?= $row['dob']?></td>
            <td><?= $row['status']?></td>
            <td><?= $row['created_at']?></td>
            <td><?= $row['updated_at']?></td>
            <td>
                <a href="update_student.php?id=<?= $row['id']?>">Edit</a> |
                <a href="delete_student.php?id=<?= $row['id']?>" onclick="return confirm('Delete this student?')">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
