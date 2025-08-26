<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dataypes</title>
</head>
<body>
    <?php 
    //Line Break Function
    function line_break(){
        echo("<br>");
    }
    
    //String
    $x = "Hello World";
    echo($x);

    line_break();

    //Integer
    $num = 12345;
    print"$num";

    line_break();

    //Float
    $float = 123.45;
    echo($float);

    line_break();

    //Boolean
    $bool = true;
    echo($bool);

    line_break();

    //Array
    $arr = array("Prasun","Lamichhane");
    print_r($arr);
    line_break();
    var_dump($arr);

    line_break();

    //NULL
    $y = "Hello world!";
    $y = NULL;
    var_dump($y);

    line_break();

    //Object
    class Student { 
        private $name; 
        function setName($name) { 
        $this->name = $name; 
        } 
    } 
    $ram = new Student;   
    ?>
</body>
</html>