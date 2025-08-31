<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $income = $_POST['income'];
    $status = $_POST['status'];
    $gender = $_POST['gender'];

    $tax = 0;

    if ($status == "married") {
        if ($income <= 450000) {
            $tax = $income * 0.01;
        } elseif ($income <= 550000) {
            $tax = (450000 * 0.01) + (($income - 450000) * 0.10);
        } elseif ($income <= 750000) {
            $tax = (450000 * 0.01) + (100000 * 0.10) + (($income - 550000) * 0.20);
        } elseif ($income <= 1300000) {
            $tax = (450000 * 0.01) + (100000 * 0.10) + (200000 * 0.20) + (($income - 750000) * 0.30);
        } else {
            $tax = (450000 * 0.01) + (100000 * 0.10) + (200000 * 0.20) + (550000 * 0.30) + (($income - 1300000) * 0.35);
        }
    } else {
        if ($income <= 400000) {
            $tax = $income * 0.01;
        } elseif ($income <= 500000) {
            $tax = (400000 * 0.01) + (($income - 400000) * 0.10);
        } elseif ($income <= 750000) {
            $tax = (400000 * 0.01) + (100000 * 0.10) + (($income - 500000) * 0.20);
        } elseif ($income <= 1300000) {
            $tax = (400000 * 0.01) + (100000 * 0.10) + (250000 * 0.20) + (($income - 750000) * 0.30);
        } else {
            $tax = (400000 * 0.01) + (100000 * 0.10) + (250000 * 0.20) + (550000 * 0.30) + (($income - 1300000) * 0.35);
        }
    }

    if ($gender == "female") {
        $tax = $tax - ($tax * 0.10);
    }

    $result = "<h3>Tax Calculation Result</h3>";
    $result .= "Annual Income: Rs. $income <br>";
    $result .= "Status: $status <br>";
    $result .= "Gender: $gender <br>";
    $result .= "<b>Total Tax: Rs. $tax</b>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tax Calculator</title>
    <style>
        .container {
            width: 450px; margin: 30px auto; background: white;
            padding: 20px; border-radius: 10px;
        }
        input, select { width: 95%; padding: 8px; margin: 5px 0; }
        input[type=submit] {
            background: blue; color: white; border: none;
            padding: 10px; cursor: pointer; border-radius: 5px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Income Tax Calculator</h2>
    <form method="post">
        <label>Annual Income:</label><br>
        <input type="number" name="income" required><br>

        <label>Marital Status:</label><br>
        <select name="status" required>
            <option value="married">Married</option>
            <option value="unmarried">Unmarried</option>
        </select><br>

        <label>Gender:</label><br>
        <select name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br><br>

        <input type="submit" value="Calculate Tax">
    </form>
    <br>
    <?= $result ?>
</div>
</body>
</html>
