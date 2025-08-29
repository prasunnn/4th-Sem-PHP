<form method="POST">
    <input type="integer" name="base" placeholder="Enter base" required> <br><br>
    <input type="integer" name="height" placeholder="Enter height" required> <br><br>
    <input type="text" name="shape" placeholder="Enter shape for area" required><br><br>
    <input type="submit" name="submit-btn" value="submit"><br>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $shape = $_REQUEST['shape'];
    $base = $_REQUEST['base'];
    $height = $_REQUEST['height'];
    $result = shape_of_area($base, $height, $shape);
    echo("Area of $shape with base $base and height $height is: $result");
}
function shape_of_area($b, $h, $s){
    if (strtolower($s) == "triangle") {
        return 0.5 * $b * $h;
    } elseif (strtolower($s) === "parallelogram") {
        return $b * $h;
    } else {
        echo ("Invalid shape! Please choose Triangle or Parallelogram.");
        exit();
    }
}
?>
