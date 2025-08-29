    <?php
    function sum($a,$b){
        if($a == $b)
            return 3 * ($a + $b);
        else
            return $a + $b;
    }
    echo "When a= 5 and b = 10, result = " .sum(5,10) ."<br>";
    echo "When a= 5 and b = 5, result = " .sum(5,5);
    ?>
