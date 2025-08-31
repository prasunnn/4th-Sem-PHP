<?php
include '33_database.php';
$msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $duration = $_POST['duration'];
    $status = $_POST['status'];

    if (!empty($title) && !empty($duration)) {
        $sql = "INSERT INTO courses (title, duration, status, created_at) 
                VALUES ('$title','$duration','$status',NOW())";
        if ($conn->query($sql)) {
            $msg = "Course added successfully!";
        } else {
            $msg = "Error: " . $conn->error;
        }
    } else {
        $msg = "Title and Duration required.";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Course</title></head>
<body>
    <h2>Add Course</h2>
    <form method="post">
        Title: <input type="text" name="title"><br><br>
        Duration: <input type="text" name="duration"><br><br>
        Status:
        <select name="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select><br><br>
        <input type="submit" value="Save">
    </form>
    <p style="color:red;"><?= $msg ?></p>
    <a href="33_list.php">View Courses</a>
</body>
</html>
