<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function area_of_triangle($b,$h){
        $area = 2* $b * $h;
        return[
            'area'=> $area,
        ];
    }
    ?>
    <?php
    $base = 3;
    $height = 4;
    $result = area_of_triangle($base,$height);
    echo ("Area of triangle with base $base and height $height is {$result['area']}");
    ?>
</body>
</html>