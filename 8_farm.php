    <form method="POST">
        <br>
        <input type="integer" name="chicken" placeholder="Enter number of chickens"><br><br>
        <input type="integer" name="cow" placeholder="Enter number of cows"> <br><br>
        <input type="integer" name="pig" placeholder="Enter number of pigs"> <br><br>
        <input type="submit" name="submit-btn" value="submit">
    </form>
    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $chicken = $_REQUEST['chicken'];
    $cow = $_REQUEST['cow'];
    $pig = $_REQUEST['pig'];
    $total_legs = ($chicken * 2) + ($cow * 4) + ($pig * 4);
    echo("<br>");
    echo("Total number of legs between $chicken chickens, $cow cows, and $pig pigs is: $total_legs");
}
?>