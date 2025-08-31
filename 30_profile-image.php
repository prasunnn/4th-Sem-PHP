<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $target_dir = "4th Sem";

    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    $file_name = basename($_FILES["profile"]["name"]);
    $target_file = $target_dir . $file_name;

    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $file_size = $_FILES["profile"]["size"];

    $allowed_types = ["jpg", "jpeg", "png"];

    if (!in_array($file_type, $allowed_types)) {
        $message = "Only JPG, JPEG, and PNG files are allowed.";
    } elseif ($file_size > 512000) {
        $message = "File size must be less than 500 KB.";
    } else {
        if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
            $message = "Profile Image uploaded successfully: <br>
                        <img src='" . $target_file . "' width='150' style='margin-top:10px;border:2px solid #444;border-radius:10px;'>";
        } else {
            $message = "Error uploading your image.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Profile Image</title>
    <style>
        .container {
            width: 420px; margin: 100px auto; background: white;
            padding: 20px; border-radius: 10px;
        }
        input[type=file], input[type=submit] {
            width: 100%; margin: 10px 0; padding: 10px;
        }
        .msg { margin-top: 15px; font-weight: bold; }
    </style>
</head>
<body>
<div class="container">
    <h2>Upload Your Profile Image</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label>Select Image [JPG/PNG, &lt; 500 KB]:</label>
        <input type="file" name="profile" accept=".jpg,.jpeg,.png" required>
        <input type="submit" value="Upload Image">
    </form>
    <div class="msg"><?= $message ?></div>
</div>
</body>
</html>
