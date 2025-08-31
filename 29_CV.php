<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $target_dir = "4th Sem";

    $file_name = basename($_FILES["cv"]["name"]);
    $target_file = $target_dir . $file_name;

    $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $file_size = $_FILES["cv"]["size"];

    $allowed_types = ["pdf", "doc"];

    if (!in_array($file_type, $allowed_types)) {
        $message = "Only PDF and DOC files are allowed.";
    } elseif ($file_size > 1048576) { 
        $message = "File size must be less than 1 MB.";
    } else {
        if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file)) {
            $message = "CV uploaded successfully: " . htmlspecialchars($file_name);
        } else {
            $message = "Error uploading your file.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload CV</title>
    <style>
        body
        .container {
            width: 400px; margin: 100px auto; background: white;
            padding: 20px; border-radius: 10px;
        }
        input[type=file], input[type=submit] {
            display: block; width: 100%; margin: 10px 0; padding: 10px;
        }
        .msg { margin-top: 15px; font-weight: bold; }
    </style>
</head>
<body>
<div class="container">
    <h2>Upload Your CV</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label >Select CV [PDF/DOC, &lt; 1 MB]:</label>
        <input type="file" name="cv" required>
        <input type="submit" value="Upload CV">
    </form>
    <p class="msg"><?= $message ?></p>
</div>
</body>
</html>
