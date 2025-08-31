<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $dob = trim($_POST["dob"]);
    $phone = trim($_POST["phone"]);

    $errors = [];

    if (strlen($username) < 8) {
        $errors[] = "Username must be at least 8 characters long.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    if (!DateTime::createFromFormat('Y-m-d', $dob)) {
        $errors[] = "Invalid Date of Birth format (use YYYY-MM-DD).";
    } else {
        $birthDate = new DateTime($dob);
        $today = new DateTime();
        $age = $today->diff($birthDate)->y;
        if ($age < 16) {
            $errors[] = "You must be at least 16 years old.";
        }
    }

    if (!preg_match('/^[0-9]{10}$/', $phone)) {
        $errors[] = "Phone number must be 10 digits.";
    }

    if (empty($errors)) {

        $message = "<p style='color:green;'>Registration Successful!</p>
                    <strong>Stored Data:</strong><br>
                    Username: $username <br>
                    Email: $email <br>
                    DOB: $dob <br>
                    Phone: $phone";
    } else {
        $message = "<p style='color:red;'>Errors:</p><ul><li>" . implode("</li><li>", $errors) . "</li></ul>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <style>
        .container {
            width: 420px; margin: 60px auto; background: white; padding: 20px;
            border-radius: 8px;
        }
        input[type=text], input[type=email], input[type=date], input[type=tel] {
            width: 100%; padding: 10px; margin: 8px 0;
            border: 1px solid #ccc; border-radius: 5px;
        }
        input[type=submit] {
            background: #28a745; color: white; border: none;
            padding: 12px; width: 100%; border-radius: 5px; cursor: pointer;
        }
        input[type=submit]:hover { background: #218838; }
        .msg { margin-top: 15px; }
    </style>
</head>
<body>
<div class="container">
    <h2>User Registration Form</h2>
    <form method="post" action="">
        <label>Username (min 8 chars):</label>
        <input type="text" name="username" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Date of Birth:</label>
        <input type="date" name="dob" required>

        <label>Phone (10 digits):</label>
        <input type="tel" name="phone" required>

        <input type="submit" value="Register">
    </form>
    <div class="msg"><?= $message ?></div>
</div>
</body>
</html>
