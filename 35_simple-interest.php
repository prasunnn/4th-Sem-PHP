<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $p = $_POST['principal'];
    $t = $_POST['time'];
    $r = $_POST['rate'];

    $si = ($p * $t * $r) / 100;

    $result = "<h3>Simple Interest Calculation</h3>";
    $result .= "Principal: $p <br>";
    $result .= "Time: $t years<br>";
    $result .= "Rate: $r %<br>";
    $result .= "<b>Simple Interest: $si</b>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Interest Calculator</title>
    <style>
        .container {
            width: 400px; margin: 30px auto; background: white;
            padding: 20px; border-radius: 10px;
        }
        input[type=number] {
            width: 95%; padding: 8px; margin: 5px 0;
        }
        input[type=submit] {
            padding: 10px 20px; background: green; color: white;
            border: none; border-radius: 5px; cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Simple Interest Calculator</h2>
    <form method="post">
        <label>Principal Amount:</label><br>
        <input type="number" name="principal" required><br>
        <label>Time (in years):</label><br>
        <input type="number" name="time" required><br>
        <label>Rate of Interest (%):</label><br>
        <input type="number" step="0.01" name="rate" required><br><br>
        <input type="submit" value="Calculate">
    </form>
    <br>
    <?= $result ?>
</div>
</body>
</html>
