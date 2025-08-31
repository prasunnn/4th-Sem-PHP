<?php
include '33_database.php';
$id = $_GET['id'];
$msg = "";

$data = $conn->query("SELECT * FROM courses WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $duration = $_POST['duration'];
    $status = $_POST['status'];

    $sql = "UPDATE courses SET title='$title', duration='$duration', status='$status', updated_at=NOW() WHERE id=$id";
    if ($conn->query($sql)) {
        header("Location: 33_list.php");
    } else {
        $msg = "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Course</title></head>
<body>
    <h2>Edit Course</h2>
    <form method="post">
        Title: <input type="text" name="title" value="<?= $data['title']?>"><br><br>
        Duration: <input type="text" name="duration" value="<?= $data['duration']?>"><br><br>
        Status:
        <select name="status">
            <option value="active" <?= $data['status']=='active'?'selected':'' ?>>Active</option>
            <option value="inactive" <?= $data['status']=='inactive'?'selected':'' ?>>Inactive</option>
        </select><br><br>
        <input type="submit" value="Update">
    </form>
    <p><?= $msg ?></p>
</body>
</html>
