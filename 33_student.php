<?php
include '33_database.php';
$msg = "";

$courses = $conn->query("SELECT * FROM courses WHERE status='active'");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $course_id = $_POST['course_id'];
    $fee = $_POST['fee'];
    $rollno = $_POST['rollno'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $status = $_POST['status'];

    if (!empty($name) && !empty($course_id)) {
        $sql = "INSERT INTO students (name, course_id, fee, rollno, phone, address, dob, status, created_at) 
                VALUES ('$name','$course_id','$fee','$rollno','$phone','$address','$dob','$status',NOW())";
        if ($conn->query($sql)) {
            $msg = "Student added successfully!";
        } else {
            $msg = "Error: " . $conn->error;
        }
    } else {
        $msg = "Name and Course required.";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Student</title></head>
<body>
    <h2>Add Student</h2>
    <form method="post">
        Name: <input type="text" name="name"><br><br>
        Course: 
        <select name="course_id">
            <?php while($c=$courses->fetch_assoc()){ ?>
            <option value="<?= $c['id']?>"><?= $c['title']?></option>
            <?php } ?>
        </select><br><br>
        Fee: <input type="text" name="fee"><br><br>
        Roll No: <input type="text" name="rollno"><br><br>
        Phone: <input type="text" name="phone"><br><br>
        Address: <input type="text" name="address"><br><br>
        DOB: <input type="date" name="dob"><br><br>
        Status:
        <select name="status">
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select><br><br>
        <input type="submit" value="Save">
    </form>
    <p style="color:red;"><?= $msg ?></p>
    <a href="33_student-list.php">View Students</a>
</body>
</html>
