<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function minutes_to_seconds($minutes){
        $seconds = $minutes * 60;
        return[
            'seconds' => $seconds,
        ];
    }
    ?>
    <?php
    $minutes = 45;
    $result = minutes_to_seconds($minutes);
    echo ("$minutes minutes equal to {$result['seconds']} seconds");
    ?>
</body>
</html>