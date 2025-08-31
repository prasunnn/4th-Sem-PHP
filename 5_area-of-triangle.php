
    <?php
    function area_of_triangle($b,$h){
        return 2* $b * $h;
        
    }

    $base = 3;
    $height = 4;
    $result = area_of_triangle($base,$height);
    echo ("Area of triangle with base $base and height $height is $result");
    ?>
