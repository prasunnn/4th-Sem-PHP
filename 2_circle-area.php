<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="integer" name="radius" placeholder="Enter radius">
        <input type="submit" name="submit-btn" value="submit">
    </form>
    
<?php
define("PI","3.14");
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $radius = $_REQUEST['radius'];
    $area = PI * $radius * $radius;
    echo("<br>");
    echo("Area of circle is: $area");
}
?>
</body>
</html>