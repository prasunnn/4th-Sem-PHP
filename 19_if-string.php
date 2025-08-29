<form method="POST">
    <input type="string" name="string" placeholder="Enter a string">
    <input type="submit" name="submit-btn" value="submit">
</form>

<?php
function if_string($str){
    if((substr($str, 0, 2) == "if"))
        return $str;
    else
        return "if " . $str;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $str = $_REQUEST['string'];
    echo ("Before: $str <br>");
    echo "After: " . if_string($str);
}
?>