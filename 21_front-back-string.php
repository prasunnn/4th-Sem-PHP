<form method="POST">
    <input type="string" name="string" placeholder="Enter a string">
    <input type="submit" name="submit-btn" value="submit">
</form>

<?php
function new_string($str){
    if(strlen($str)<1)
        return $str;
    else
        $char = substr($str,-1);
        return $char . $str . $char;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $str = $_REQUEST['string'];
    echo ("Before: $str <br>");
    echo "After: " . new_string($str);
}
?>