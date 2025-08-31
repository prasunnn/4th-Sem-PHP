<?php
$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $class = $_POST['class'];

    $subjects = [
        "English" => $_POST['english'],
        "Math" => $_POST['math'],
        "Science" => $_POST['science'],
        "Computer" => $_POST['computer'],
        "Nepali" => $_POST['nepali']
    ];

    $total = array_sum($subjects);
    $percentage = $total / count($subjects);

    if ($percentage >= 80) {
        $division = "Distinction";
    } elseif ($percentage >= 60) {
        $division = "First Division";
    } elseif ($percentage >= 45) {
        $division = "Second Division";
    } elseif ($percentage >= 32) {
        $division = "Third Division";
    } else {
        $division = "Fail";
    }

    $result .= "<h2 style='text-align:center;'>Student Mark Sheet</h2>";
    $result .= "<table border='1' width='500' cellspacing='0' cellpadding='8' style='margin:auto;'>";
    $result .= "<tr><td><b>Name</b></td><td>$name</td></tr>";
    $result .= "<tr><td><b>Roll No</b></td><td>$roll</td></tr>";
    $result .= "<tr><td><b>Class</b></td><td>$class</td></tr>";
    $result .= "</table><br>";

    $result .= "<table border='1' width='500' cellspacing='0' cellpadding='8' style='margin:auto; text-align:center;'>";
    $result .= "<tr><th>Subject</th><th>Marks</th></tr>";

    foreach ($subjects as $sub => $marks) {
        $result .= "<tr><td>$sub</td><td>$marks</td></tr>";
    }

    $result .= "<tr><th>Total</th><th>$total</th></tr>";
    $result .= "<tr><th>Percentage</th><th>".number_format($percentage,2)."%</th></tr>";
    $result .= "<tr><th>Division</th><th>$division</th></tr>";
    $result .= "</table>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Generate Mark Sheet</title>
    <style>
        .container {
            width: 600px; margin: 30px auto; background: white;
            padding: 20px; border-radius: 10px;
        }
        input[type=text], input[type=number] {
            width: 95%; padding: 8px; margin: 5px 0;
        }
        input[type=submit] {
            padding: 10px 20px; background: blue; color: white;
            border: none; border-radius: 5px; cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Enter Student Marks</h2>
    <form method="post">
        <label>Name:</label><br>
        <input type="text" name="name" required><br>
        <label>Roll No:</label><br>
        <input type="text" name="roll" required><br>
        <label>Class:</label><br>
        <input type="text" name="class" required><br><br>

        <label>English:</label><br>
        <input type="number" name="english" min="0" max="100" required><br>
        <label>Math:</label><br>
        <input type="number" name="math" min="0" max="100" required><br>
        <label>Science:</label><br>
        <input type="number" name="science" min="0" max="100" required><br>
        <label>Computer:</label><br>
        <input type="number" name="computer" min="0" max="100" required><br>
        <label>Nepali:</label><br>
        <input type="number" name="nepali" min="0" max="100" required><br><br>

        <input type="submit" value="Generate Mark Sheet">
    </form>
    <br>
    <?= $result ?>
</div>
</body>
</html>
