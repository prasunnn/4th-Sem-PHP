<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function sum($a,$b){
        $sum = $a + $b;
        return[
            'sum'=> $sum,
        ];
    }

    $num1 = 5;
    $num2 = 6;
    $result = sum($num1,$num2);
    echo ("$num1 + $num2 equals {$result['sum']}");
    ?>
</body>
</html>