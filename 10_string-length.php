<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function string_length($string1, $string2){
        if(strlen($string1)==strlen($string2))
            return true;
        else
            return false;
    }
    $string1 = "Hello";
    $string2 = "Hnry";
    $result = string_length($string1,$string2);
    echo("1. $string1 <br>");
    echo("2. $string2 <br>");
    if($result == true)
        echo("They have same length.");
    else
        echo("They don't have same length");
    ?>
</body>
</html>