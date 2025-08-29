
    <?php
    function divisible_by_five($num){
        if(fmod($num,5) == 0)
            return true;
        else
            return false;
    }
    $num = 15;
    $result = divisible_by_five($num);
    if($result == true)
        echo("$num is divisible by 5.");
    else
        echo("$num is not divisible by 5.");
    ?>
