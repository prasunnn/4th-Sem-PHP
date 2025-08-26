<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function years_to_days($years){
        $leap_years = intdiv($years,4);
        $days = $years * 365;
        $total_days = $days + $leap_years;
        return[
            'days'=> $total_days,
        ];
    }
    ?>
    <?php
    $age = 21;
    $result = years_to_days($age);
    echo ("$age years equals to {$result['days']} days");
    ?>
</body>
</html>