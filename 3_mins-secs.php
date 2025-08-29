
    <?php
    function minutes_to_seconds($minutes){
        $seconds = $minutes * 60;
        return[
            'seconds' => $seconds,
        ];
    }

    $minutes = 45;
    $result = minutes_to_seconds($minutes);
    echo ("$minutes minutes equal to {$result['seconds']} seconds");
    ?>
