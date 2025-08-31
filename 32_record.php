<?php
include '32_database.php';

$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $rank = trim($_POST['rank']);
    $status = $_POST['status'];
    $created_by = $_POST['created_by'];

    if (empty($name) || empty($rank) || empty($status) || empty($created_by)) {
        $msg = "All fields are required!";
    } else {

        $imageName = "";
        if (!empty($_FILES['image']['name'])) {
            $allowed = ['jpg', 'jpeg', 'png'];
            $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

            if (in_array($ext, $allowed) && $_FILES['image']['size'] < 500000) {
                $imageName = time() . "." . $ext;
                move_uploaded_file($_FILES['image']['tmp_name'], "4th Sem" . $imageName);
            } else {
                $msg = "Invalid image file (only PNG/JPEG < 500KB allowed)";
            }
        }

        if (empty($msg)) {
            $sql = "INSERT INTO employees (name, rank, status, image, created_by, created_at) 
                    VALUES ('$name', '$rank', '$status', '$imageName', '$created_by', NOW())";
            if ($conn->query($sql)) {
                $msg = "Record added successfully!";
            } else {
                $msg = "Error: " . $conn->error;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Record</title>
</head>
<body>
    <h2>Add Employee</h2>
    <form method="post" enctype="multipart/form-data">
        Name: <input type="text" name="name"><br><br>
        Rank: <input type="text" name="rank"><br><br>
        Status: 
        <select name="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select><br><br>
        Image: <input type="file" name="image"><br><br>
        Created By: <input type="text" name="created_by"><br><br>
        <input type="submit" value="Save">
    </form>
    <p style="color:red;"><?php echo $msg; ?></p>
    <a href="32_list.php">View Records</a>
</body>
</html>
