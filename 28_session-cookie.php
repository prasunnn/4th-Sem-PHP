<?php
session_start();

$valid_username = "admin";
$valid_password = "admin";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $remember = isset($_POST['remember']);

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;

        if ($remember) {
            setcookie("username", $username, time() + (86400), "/"); 
        } else {
            setcookie("username", "", time() - 3600, "/");
        }

        header("Location: 28_session-cookie-2.php");
        exit();
    } else {
        $error = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>

        .container {
            width: 300px; margin: 100px auto; padding: 20px;
            background: white; border-radius: 10px;
            
        }
        input[type=text], input[type=password] {
            width: 100%; padding: 10px; margin: 8px 0;
            border: 1px solid #ccc; border-radius: 5px;
        }
        input[type=submit] {
            width: 100%; background: blue; color: white;
            padding: 10px; border: none; border-radius: 5px;
            cursor: pointer;
        }
        input[type=submit]:hover { background: darkblue; }
        .error { color: red; margin-top: 10px; }
    </style>
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>" required>
        
        <label>Password:</label>
        <input type="password" name="password" required>
        
        <label><input type="checkbox" name="remember"> Remember Me</label>
        
        <input type="submit" value="Login">
    </form>
    <?php if ($error) echo "<p class='error'>$error</p>"; ?>
</div>
</body>
</html>
