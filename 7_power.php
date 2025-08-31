    <?php
    function power($v,$c){
        $power = $v * $c;
        return $power;
    }

    $voltage = 5;
    $current = 6;
    $result = power($voltage,$current);
    echo ("When voltage is $voltage volt and current is $current apmere, power equals to $result watt");
    ?>
