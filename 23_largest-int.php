<form method="POST">
    <input type="integer" name="num1" placeholder="Enter number 1">
    <input type="integer" name="num2" placeholder="Enter number 2">
    <input type="integer" name="num3" placeholder="Enter number 3">
    <input type="submit" name="submit-btn" value="submit">
</form>

<?php
function largest($a,$b,$c){
    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $num1 = $_REQUEST['num1'];
    $num2 = $_REQUEST['num2'];
    $num3 = $_REQUEST['num3'];
    echo "Largest among $num1, $num2, and $num3 is: " . largest($num1,$num2,$num3);
}
?>