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