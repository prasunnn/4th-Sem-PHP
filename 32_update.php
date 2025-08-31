<?php
include '32_database.php';
$id = $_GET['id'];
$msg = "";

$result = $conn->query("SELECT * FROM employees WHERE id=$id");
$data = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $rank = $_POST['rank'];
    $status = $_POST['status'];
    $updated_by = $_POST['updated_by'];

    $imageName = $data['image']; 

    if (!empty($_FILES['image']['name'])) {
        $allowed = ['jpg','jpeg','png'];
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        if (in_array($ext, $allowed) && $_FILES['image']['size'] < 500000) {
            $imageName = time() . "." . $ext;
            move_uploaded_file($_FILES['image']['tmp_name'], "4th Sem" . $imageName);
        } else {
            $msg = "Invalid image file.";
        }
    }

    if (empty($msg)) {
        $sql = "UPDATE employees SET 
                name='$name', rank='$rank', status='$status',
                image='$imageName', updated_by='$updated_by',
                updated_at=NOW() WHERE id=$id";
        if ($conn->query($sql)) {
            header("Location: 32_list.php");
        } else {
            $msg = "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit Employee</title></head>
<body>
    <h2>Edit Employee</h2>
    <form method="post" enctype="multipart/form-data">
        Name: <input type="text" name="name" value="<?= $data['name'] ?>"><br><br>
        Rank: <input type="text" name="rank" value="<?= $data['rank'] ?>"><br><br>
        Status: 
        <select name="status">
            <option value="active" <?= $data['status']=='active'?'selected':'' ?>>Active</option>
            <option value="inactive" <?= $data['status']=='inactive'?'selected':'' ?>>Inactive</option>
        </select><br><br>
        Image: <input type="file" name="image"><br><br>
        Updated By: <input type="text" name="updated_by"><br><br>
        <input type="submit" value="Update">
    </form>
    <p style="color:red;"><?= $msg ?></p>
</body>
</html>
