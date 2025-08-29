<form method="POST">
    <input type="number" name="number" placeholder="Enter number of people">
    <input type="submit" name="submit-btn" value="submit">
</form>

<?php
function cars_needed($people){
    $capacity = 5;
    return ceil($people / $capacity); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $people = $_REQUEST['number'];
    echo "Cars needed to fit $people people is: " . cars_needed($people);
}
?>