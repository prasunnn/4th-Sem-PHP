<form method="POST">
    <input type="string" name="string" placeholder="Enter a string">
    <input type="submit" name="submit-btn" value="submit">
</form>

<?php
function copy_string($str){
    if(strlen($str)<2)
        return $str;
    else
        $new_string = substr($str,0,2);
        return str_repeat($new_string,4);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $str = $_REQUEST['string'];
    echo ("Before: $str <br>");
    echo "After: " . copy_string($str);
}
?>