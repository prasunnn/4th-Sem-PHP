<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function power($v,$c){
        $power = $v * $c;
        return[
            'power'=> $power,
        ];
    }

    $voltage = 5;
    $current = 6;
    $result = power($voltage,$current);
    echo ("When voltage is $voltage volt and current is $current apmere, power equals to {$result['power']} watt");
    ?>
</body>
</html>