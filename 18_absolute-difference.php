<form method="POST">
    <input type="number" name="number" placeholder="Enter a number">
    <input type="submit" name="submit-btn" value="submit">
</form>

<?php
function absolute_difference($num){
    $diff = abs($num - 51);
    if($num>51)
        return 3 * $diff;
    else
        return $diff; 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $num = $_REQUEST['number'];
    echo "Result: " . absolute_difference($num);
}
?>