<form method="POST">
    <input type="string" name="string" placeholder="Enter a string">
    <input type="submit" name="submit-btn" value="submit">
</form>

<?php
function upper_string($str){
    $len = strlen($str);
    if($len<3)
        return strtoupper($str);
    else{
    $front = substr($str,0,$len-3);
    $back = strtoupper(substr($str,-3));
    return $front . $back;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $str = $_REQUEST['string'];
    echo ("Before: $str<br>");
    echo "After: " . upper_string($str);
}
?>