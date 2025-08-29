    <?php
    function string_length($str){
        if($str == "")
            return 0;
        else
            return 1 + string_length(substr($str, 1));
    }

    $str = "prasun project";
    echo "The length of '$str' is: " . string_length($str);
    ?>