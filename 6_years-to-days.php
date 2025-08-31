<?php
    function years_to_days($years){
        $leap_years = intdiv($years,4);
        $days = $years * 365;
        $total_days = $days + $leap_years;
        return $total_days;
    }

    $age = 21;
    $result = years_to_days($age);
    echo ("$age years equals to $result days");
?>
