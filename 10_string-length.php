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